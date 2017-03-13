<?php

//echo 'it\'s not done yet'.'<br/>';
echo __FILE__.' in progress'.'<br/>';

$routs = [
    //'login',
    //'account',

    'catalog',
    'product',
    
];

$action =[null, null, null];
$_action = $action[0];
$_subAction= $action[1];
$_id = $action[2];

if( $_SERVER['REQUEST_URI'] != '/' ) {



    $url = parse_url($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
    $urlArray = explode('/', $url['path']);
    $urlArray = array_filter($urlArray);
//    $_action = $urlArray[1];

     if(isset($urlArray[4])){
        include_once 'controllers/404Controller.php';
        exit();
    }

    foreach ($urlArray as $key => $_url){
        if(isset($_url)) {
            if ($key == 1) {
                $_action = $_url;
            }
            else if ($key > 1) {
                if (is_numeric($_url) && $_id == null) {
                    $_id = $_url;
                } else {
                    $_subAction = $_url;
                }
            }
        }

//        var_dump($_url);
//        echo '<br/>';
    }

    if( !in_array( $_action, $routs ) ) {
        $_action = null;
        $_subAction = null;
        include_once 'controllers/404Controller.php';
    }

//    var_dump($urlArray);
    echo '<hr>';
    echo '$_action= '.$_action.'<br/>';
    echo '$_subAction= '.$_subAction.'<br/>';
    echo '$_id= '.$_id.'<br/>';
    echo '<hr>';
    //exit();
    include_once "controller.php";
}
else{
    //include_once 'controllers/mainController.php';
    $_action='main';
}