<?php
//include_once 'auth/user.php';
if( $_action == 'basket' ) {
    $cartProducts = [];

    if(isset($_SESSION['basket'])) {
        foreach ($_SESSION['basket'] as $id) {
            $cartProducts[] = getProduct($pdo, $id)[0];
        }
    }
    else{
        $_SESSION['flash_msg'] = 'basket is empty';
    }
//use function to add bootstrap
    view('basket', ['products' => $cartProducts]);
}