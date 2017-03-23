<?php

global $_config;

function getUsers( $pdo ) {
    global $_config, $_page;
    $users = sql($pdo,
        'SELECT * FROM `users` 
        ORDER BY `id` DESC 
        LIMIT '.($_page*20).','.$_config['items_on_page'],
        [],
        'rows'
    );

    return $users;
}

function getUsersCount( $pdo ) {

    $usersCount = sql($pdo,
        'SELECT COUNT(*) as users_count FROM `users`',
        [],
        'rows'
    );

    return $usersCount;
}

function getUser( $pdo, $id ) {

    $user = sql($pdo,
        'SELECT * FROM `users` WHERE `id` = '.$id,
        [],
        'rows'
    );

    return $user;
}

function saveUser( $pdo, $userData ) {

    $user = sql($pdo,
        'UPDATE `users` set 
          `name` = "'. $userData['name'] .'",  
          `email` = "'. $userData['email'] .'",  
          `login` = "'. $userData['login'] .'",  
          `password` = "'. sha1($userData['password']) .'"
          WHERE `id` = '.$userData['id']
    );

    return $user;
}