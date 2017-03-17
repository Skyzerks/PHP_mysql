<?php

if(($_POST)!= null) {

    $_SESSION['login']['login'] = $_POST['login'];
    $_SESSION['login']['email'] = $_POST['email'];
    $_SESSION['login']['password'] = $_POST['password'];

    $auth_info = authUser($pdo, $_SESSION['login']['login']);

    var_dump($auth_info);
    auth($pdo);
    var_dump(auth($pdo));
    exit();
}
include 'auth/login.php';
