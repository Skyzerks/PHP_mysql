<?php

include_once 'auth/user.php';

foreach ($_SESSION['basket'] as $id => $product){
    echo $id.' | '.$product.'<br/>';
}

//$basket = ($pdo->query('SELECT * FROM `products` WHERE `category_id` = ?',[$_SESSION['basket']]));
$basket = sql(
    $pdo,
    'SELECT * FROM `products` WHERE `category_id` = ?',
    [$_SESSION['basket']],
    'rows'

);

//use function to add bootstrap
view('basket',$basket);