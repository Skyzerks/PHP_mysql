<?php

if(($_POST)!= null){

    $_SESSION['login']['name'] = $_POST['name'];
    $_SESSION['login']['email'] = $_POST['email'];
    
}

if(isset($_SESSION['login'])) {
    if ($_SESSION['login']['name'] && $_SESSION['login']['email'] != null) {

        include_once 'auth/user.php';
    }
}
else {
    header('Location: /login');
    exit;
}

view('main');

//include 'templates/mainView.php';