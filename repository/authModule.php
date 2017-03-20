<?php
function createUser($pdo, $name, $email, $password, $login){
    $insert = $pdo->prepare("INSERT INTO users(`name`,`role`,`email`,`password`,`login`) VALUES (?,?,?,?,?)");
    $res = $insert->execute(array($name,'customer',$email, $password, $login));
    return $res;
}
function checkUniqueUser($pdo,$email,$login, $pass){

    $user = sql($pdo,
        "SELECT * FROM `users`
        WHERE (`login` = ? AND `password`= ?) 
        OR (`email` = ? AND `password`= ?)",
        [$login, $pass, $email, $pass],
        'rows');

    return $user;
}
function authUser($pdo,$login){//,$password){
    $user = $pdo->query("SELECT * FROM `users` WHERE `login` = ?", $login);
                          // AND `password` = '{$password}'");
    $userCheck = $user->fetchAll();
    return $userCheck;
}
function getUserInfo($pdo, $id){
    $user = $pdo->query("SELECT * FROM `users` WHERE `id` = ?", $id);
    $userGet = $user->fetch();
    return $userGet;
}


//function reg($pdo)
//{
//    if (!empty($_POST)) {
//        $name = $_POST['name'];
//        $role = $_POST['role'];
//        $email = $_POST['email'];
//        $password = $_POST['pass'];
//        $login = $_POST['login'];
//        $date = date('Y-m-d H:i:s');
//        if ($name != '' && $email != '' && $login != '' && $password != '') {
//            $uniqueUser = checkUniqueUser($pdo, $email, $login);
//            if (empty($uniqueUser)) {
//                regUser($pdo, $name, $email, $password, $login, $role, $date);
//                $_SESSION['flash_msg'] = "User " . $login . " with email " . $email . " was registered";
//                var_dump($_SESSION['flash_msg']);
//                header('location: /');
//            } else {
//                $_SESSION['flash_msg'] = "User already exists";
//                header('location: /login');
//            }
//        }
//    }
//}