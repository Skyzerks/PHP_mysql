<?php

if( $_subAction == 'user' && $_method == 'edit' ) {
    $id = $_GET['id'];
    $user = getUser( $pdo, $id );
    view('admin/userEdit', ['user' => $user[0]]);
}
else if( $_subAction == 'user' && $_method == 'update' ) {
    $user = saveUser( $pdo, $_POST['form'] );
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