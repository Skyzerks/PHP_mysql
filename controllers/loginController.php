<?php

include 'auth/login.php';


if($_action=='login'&& $_POST != null) {
    $_login = isset($_POST['name']) ? $_POST['name'] : null;
    $_pass = isset($_POST['pass']) ? $_POST['pass'] : null;
    $_email = isset($_POST['email']) ? $_POST['email'] : null;
    $uniqueUser = checkUniqueUser($pdo,$_email,$_login);


    if ($uniqueUser) {
        $_SESSION['email'] = $_email;
        $_SESSION['login'] = $_login;
        $_SESSION['flash_msg'] = "User '<b>" . $_login . "</b>' logged in";
        header('location: /');
        exit();
//        if ($_POST['pass'] != $_pass) {
//            $_SESSION['flash_msg'] = "User '<b>" . $login . "</b>' - ' try to remember the password and try again'";
//            header('location: /login');
//            exit();
//        }
    }
    else {
        $_SESSION['flash_msg'] = "User " . $_login . " is not valid";
        header('location: /login');
        exit();
    }
}

if(isset($_SESSION['flash_msg'])){
    echo $_SESSION['flash_msg'].'<br/>';
    unset($_SESSION['flash_msg']);
}

//header('location: /');

//$_SESSION['login']['login'] = $_POST['login'];
//    $_SESSION['login']['email'] = $_POST['email'];
//    $_SESSION['login']['password'] = $_POST['password'];
//    exit();

