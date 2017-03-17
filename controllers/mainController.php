<?php




if(isset($_SESSION['login'])) {
    if ($_SESSION['login']['login'] && $_SESSION['login']['email'] != null) {

        include_once 'auth/user.php';
    }
}
else {
    header('Location: /login');
    exit;
}
//use function to add bootstrap 
view('main');

//include 'templates/mainView.php';