<?php
//include_once 'auth/user.php';
if( $_action == 'basket' ) {
    $cartProducts = [];

    foreach ($_SESSION['basket'] as $id) {
        $cartProducts[] = getProduct($pdo, $id)[0];
    }
//use function to add bootstrap
    view('basket', ['products' => $cartProducts]);
}