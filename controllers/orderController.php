<?php
if($_action == 'order') {
    $cartProducts = [];
    $totalPrice = 0;

    foreach ($_SESSION['basket'] as $id) {
        $cartProducts[]= $product = getProduct($pdo, $id)[0];
        $totalPrice+=$product['price'];
    }

    $insert = $pdo->prepare("INSERT INTO `orders`
    (`user_id`,`product_ids`,`status`,`total_price`,`created_at`) 
    VALUES (?,?,?,?,?)");
    $res = $insert->execute(
        array($_SESSION['user_id'],
            join(',',$_SESSION['basket']),
            'open',
            $totalPrice,
            date('Y-m-d H:i:s')));

    
    unset( $_SESSION['basket'] );
//use function to add bootstrap



    view('order');
}

