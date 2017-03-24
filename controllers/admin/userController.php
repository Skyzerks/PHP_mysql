<?php
if( $_subAction == 'user'&&isset($_method)){
    switch ($_method){
        case 'create': {
            $user = null;

            if($_POST){
                $user = createUser($pdo, $_POST['form']['name'], $_POST['form']['email'], sha1($_POST['form']['password']), $_POST['form']['login']);
                $_SESSION['flash_msg'] = 'User created';
            }
            var_dump($_POST);  //var dump
            echo '<br>';

            view('admin/createUser', ['user' => $user[0]]);
            unset($_POST);
            break;
        }
        case 'edit':{
            $id = $_GET['id'];
            $user = getUser( $pdo, $id );

            view('admin/userEdit', ['user' => $user[0]]);
            break;
        }
        case 'delete':{
            $id = $_GET['id'];
            deleteUser( $pdo, $id );

            header('location: /admin/user');
            exit();
            break;
        }
        case 'update':{
            $id = $_POST['form']['id'];
            $res = saveUser( $pdo, $_POST['form'] );

            if( $res && $_FILES['avatar'] ) {
                $fileName = 'avatar_'.$id.'.jpg';
                move_uploaded_file($_FILES['avatar']['tmp_name'], 'files/avatars/'.$fileName);
            }

            header('location: /admin/user/?method=edit&id='.$_POST['form']['id']);
            exit();
            break;
        }
    }
}
else if( $_subAction == 'user' ) {

    $users = getUsers( $pdo );

    $allUsersCount = getUsersCount($pdo)[0]['users_count'];
    $pagination = [
        'pages_count' => ceil($allUsersCount / $_config['items_on_page'])
    ];

    view('admin/users', ['users' => $users, 'pagination' => $pagination]);
}


//if( $_subAction == 'user' && $_method == 'create' ) {
//
//    $user = null;
//
//    if($_POST){
//        $user = createUser($pdo, $_POST['form']['name'], $_POST['form']['email'], sha1($_POST['form']['password']), $_POST['form']['login']);
//        $_SESSION['flash_msg'] = 'User created';
//    }
//    var_dump($_POST);  //var dump
//    echo '<br>';
//
//    view('admin/createUser', ['user' => $user[0]]);
//    unset($_POST);
//}
//else if( $_subAction == 'user' && $_method == 'edit' ) {
//
//    $id = $_GET['id'];
//    $user = getUser( $pdo, $id );
//
//    view('admin/userEdit', ['user' => $user[0]]);
//}
//else if( $_subAction == 'user' && $_method == 'delete' ) {
//
//    $id = $_GET['id'];
//    deleteUser( $pdo, $id );
//
//    header('location: /admin/user');
//}
//else if( $_subAction == 'user' && $_method == 'update' ) {
//
//    $id = $_POST['form']['id'];
//    $res = saveUser( $pdo, $_POST['form'] );
//
//    if( $res && $_FILES['avatar'] ) {
//        $fileName = 'avatar_'.$id.'.jpg';
//        move_uploaded_file($_FILES['avatar']['tmp_name'], 'files/avatars/'.$fileName);
//    }
//
//    header('location: /admin/user/?method=edit&id='.$_POST['form']['id']);
//    exit();
//}

