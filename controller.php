<?php

if(isset($_action)) {

    if( $_action != 'admin' ) {
        $controllerFileName = 'controllers/' . $_action . 'Controller.php';
        if (file_exists($controllerFileName)) {
            include_once "$controllerFileName";
        }
    }
    else {
        if($_SESSION['role'] == 'admin' )  {

            $controllerFileName = 'controllers/admin/' . $_subAction . 'Controller.php';
            if(file_exists( $controllerFileName )) {
                include_once "$controllerFileName";
            }
            else{
                view('admin/main');
            }
        }
        else {
            header('location: /login');
            exit();
        }
    }
}
