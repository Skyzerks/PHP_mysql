<?php

global $_config;

function getUsersCount( $pdo ) {

    $usersCount = sql($pdo,
        'SELECT COUNT(*) as users_count FROM `users`',
        [],
        'rows'
    );

    return $usersCount;
}

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

function getUser( $pdo, $id ) {

    $user = sql($pdo,
        'SELECT * FROM `users` WHERE `id` = '.$id,
        [],
        'rows'
    );

    return $user[0];
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

function createUser($pdo, $name, $email, $password, $login){
    $insert = $pdo->prepare("INSERT INTO users(`name`,`role`,`email`,`password`,`login`) VALUES (?,?,?,?,?)");
    $res = $insert->execute(array($name,'customer',$email, $password, $login));
    return $res;
}

function deleteUser( $pdo, $nameId ){
    $delete = $pdo->prepare("DELETE FROM `users` WHERE `id`= (?)");
    $delete->execute(array($nameId));

    //or
    //$delete = $pdo->prepare("DELETE FROM `users` WHERE `id`= (?)");
    //$delete->execute();

    return $delete;
}
