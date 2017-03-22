<?php

if(isset($_action)) {
    $controllerFileName = 'controllers/'.$_action.'Controller.php';
    if(file_exists($controllerFileName)){
        include_once "$controllerFileName";
    }
    else {
        if( isset( $_SESSION['user'] ) && $_SESSION['user']['role'] == 'admin' )  {
            $_method = isset($_GET['method'])? $_GET['method'] : null;//$_method = $_GET['method'] ?? null;
            $_page = isset($_GET['page'])? $_GET['page'] : 0;
            include 'templates/admin/headerView.php';
            $controllerFileName = 'controllers/admin/' . $_subAction . 'Controller.php';
            if(file_exists( $controllerFileName )) {
                include_once "$controllerFileName";
            }
            else{
                view('404');
            }
        }
        else {
            header('location: /login');
            exit();
        }
    }
}
