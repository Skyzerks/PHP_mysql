<?php

if( $_action == 'registration' ) {
    if( $_POST != null ) {
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $login = isset($_POST['login']) ? $_POST['login'] : null;
        $pass = isset($_POST['password']) ? $_POST['password'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $uniqueUser = checkUniqueUser($pdo, $email, $login, $pass);

        if( count($uniqueUser) == 0 ) {
            createUser($pdo, $name, $email, $pass, $login);
            $_SESSION['flash_msg'] = "Registration success";
            header('location: /');
            exit();
        }
        else {
            $_SESSION['flash_msg'] = "Registration faild";
        }
    }
    view('registration');
}