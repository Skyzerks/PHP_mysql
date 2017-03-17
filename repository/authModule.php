<?php
function createUser($pdo, $name, $email, $password, $login){
    $insert = $pdo->prepare("INSERT INTO users(`name`,`role`,`email`,`password`,`login`) VALUES (?,?,?,?,?)");
    $insert->execute(array($name,'customer',$email, $password, $login));
}
function checkUniqueUser($pdo,$email,$login){
    $user = $pdo->query("SELECT * FROM `users` WHERE `login` ='{$login}' OR `email` = '{$email}'");
    $userCheck = $user->fetchAll();
    return $userCheck;
}
function authUser($pdo,$login){//,$password){
    $user = $pdo->query("SELECT * 
                          FROM `users` 
                          WHERE `login` ='{$login}'");
                          // AND `password` = '{$password}'");
    $userCheck = $user->fetchAll();
    return $userCheck;
}

function getUserInfo($pdo, $id){
    $user = $pdo->query("SELECT * 
                          FROM `users` 
                          WHERE `id` ='{$id}' ");
    $userGet = $user->fetch();
    return $userGet;
}



function index()
{
    view('login');
}
function auth($pdo)
{
    $login = isset($_POST['login']['login']) ? $_POST['login']['login'] : null;
    $pass = isset($_POST['login']['pass']) ? $_POST['login']['pass'] : null;
    //$rememberMe = isset($_POST['rememberMe']) ? $_POST['rememberMe'] : null;
    var_dump($login);
    exit();

    $authUser = authUser($pdo, $login);
    if ($authUser) {
        if ($authUser[0]['password'] == $pass) {
            $_SESSION['user']['id'] = $authUser[0]['id'];
            $_SESSION['user']['role'] = $authUser[0]['role'];
            $_SESSION['user']['user_name'] = $authUser[0]['name'];
            $_SESSION['flash_msg'] = "User '<b>" . $login . "</b>' logged in";
            header('location: /');
        } else {
            $_SESSION['flash_msg'] = "User '<b>" . $login . "</b>' - ' try to remember the password and try again'";
            header('location: /login');
        }
    } else {
        $_SESSION['flash_msg'] = "User " . $login . " is not valid";
        header('location: /login');
    }
}
function logout($userName)
{
    unset($_SESSION['login']);
    $_SESSION['flash_msg'] = "User '<b>" . $userName . "</b>' logged out";
    header('location: /');
}
function reg($pdo)
{
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $login = $_POST['login'];
        $date = date('Y-m-d H:i:s');
        if ($name != '' && $email != '' && $login != '' && $password != '') {
            $unicUser = checkUniqueUser($pdo, $email, $login);
            if (empty($unicUser)) {
                regUser($pdo, $name, $email, $password, $login, $role, $date);
                $_SESSION['flash_msg'] = "User " . $login . " with email " . $email . " was registered";
                var_dump($_SESSION['flash_msg']);
                header('location: /');
            } else {
                $_SESSION['flash_msg'] = "User already exists";
                header('location: /login');
            }
        }
    }
}