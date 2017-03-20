<?php
//include_once 'auth/user.php';
if( $_action == 'product' && $_id ) {

    $product = sql($pdo,
        'SELECT * FROM `products` WHERE `id` = ' . $_id,
        [],
        'rows'
    );

    if (isset($_POST['btn'])) {
        buy_product($_id);
    }

    view('product', $product);
//include_once 'templates/productView.php';
}
