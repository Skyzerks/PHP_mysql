<?php

if( $_subAction == 'user' && $_method == 'edit' ) {

    $id = $_GET['id'];
    $user = getUser( $pdo, $id );

    view('admin/userEdit', ['user' => $user[0]]);
}
else if( $_subAction == 'user' && $_method == 'update' ) {

    $id = $_POST['form']['id'];
    $res = saveUser( $pdo, $_POST['form'] );

    if( $res && $_FILES['avatar'] ) {
        $fileName = 'avatar_'.$id.'.jpg';
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'files/avatars/'.$fileName);
    }

    header('location: /admin/user/?method=edit&id='.$_POST['form']['id']);
    exit();
}
else if( $_subAction == 'user' ) {

    $users = getUsers( $pdo );

    $allUsersCount = getUsersCount($pdo)[0]['users_count'];
    $pagination = [
        'pages_count' => ceil($allUsersCount / $_config['items_on_page'])
    ];

    view('admin/users', ['users' => $users, 'pagination' => $pagination]);
}