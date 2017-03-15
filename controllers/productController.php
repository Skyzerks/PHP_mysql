<?php
include_once 'auth/user.php';

if( $_action == 'product' && $_id ) {

    $product = sql($pdo,
        'SELECT * FROM `products` WHERE `id` = ' . $_id,
        [],
        'rows'
    );

    view('product', $product);
    //include_once 'templates/productView.php';

}

function buy_product($id)
{
    $_SESSION['basket'][]= $id;
    echo 'Added to basket';
}
if (isset($_POST['btn']))
    buy_product($_id);
