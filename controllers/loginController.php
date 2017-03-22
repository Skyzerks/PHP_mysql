<?php

if($_action=='login'&&!isset($_SESSION['role'])){

    if($_POST != null) {
        $login = isset($_POST['name']) ? $_POST['name'] : null;
        $pass = isset($_POST['password']) ? $_POST['password'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $uniqueUser = checkUniqueUser($pdo, $email, $login, $pass);

        if (count($uniqueUser)>0) {

            $_SESSION['user_id'] = $uniqueUser[0]['id'];
            $_SESSION['user_name'] = $uniqueUser[0]['name'];
            $_SESSION['email'] = $uniqueUser[0]['email'];
            $_SESSION['login'] = $uniqueUser[0]['login'];
            $_SESSION['role'] = $uniqueUser[0]['role'];
            $_SESSION['flash_msg'] = "User '<b>" .$uniqueUser[0]['name']. "</b>' has logged in";
            header('location: /');
            exit();
        }
        else {
            $_SESSION['flash_msg'] = "User " . $login . " is not valid";
        }
    }
    view('login');
}

//header('location: /');

//$_SESSION['login']['login'] = $_POST['login'];
//    $_SESSION['login']['email'] = $_POST['email'];
//    $_SESSION['login']['password'] = $_POST['password'];
//    exit();

