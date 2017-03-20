<?php

//if(isset($_action)) {
    $string = 'controllers/'.$_action.'Controller.php';
    if(file_exists($string)){
        include_once "$string";
    }
//}
//include 'controllers/*.php';
