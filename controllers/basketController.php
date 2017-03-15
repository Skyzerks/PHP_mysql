<?php

include_once 'auth/user.php';

foreach ($_SESSION['basket'] as $id => $product){
    echo $id.' | '.$product.'<br/>';
}

//use function to add bootstrap
view('basket');