<?php




if(isset($_POST['name'])) {
    if ($_POST['name'] && $_POST['email'] != null) {

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