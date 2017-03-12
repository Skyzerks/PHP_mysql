<?php

echo __FILE__.' in progress'.'<br/>';


// Simple function to handle PDO prepared statements
function sql($db, $q, $params = [], $return = null) {
    // Prepare statement
    $stmt = $db->prepare($q);
    // Execute statement
    $res = $stmt->execute($params);
    // Decide whether to return the rows themselves, or query status
    if ($return == "rows") {
        return $stmt->fetchAll();
    }
    else {
        return $res;
    }
}


function email_check($email){
    //if (!preg_match("~^([a-z0-9_/-/.])+@([a-z0-9_/-/.])+/.([a-z0-9])+$~i", $email)) {
    if (!preg_match("/@/", $email)) {
        return 1;
    }
    else {
        return 0;
    }
}

//function validate($array){
//
//    if(email_check($array)!=0) {
//        foreach ($array as $key => $val) {
//            break;
//        }
//    }
//    return $array;
//}



function view($_View, $data = [],$arg2 = null){
    include "templates/header.php";
    if (file_exists('templates/'.$_View.'View.php')){
        include 'templates/'.$_View.'View.php';
    }
}