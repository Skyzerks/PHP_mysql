<?php

global $_config;

function getOrdersCount( $pdo ) {

    $ordersCount = sql($pdo,
        'SELECT COUNT(*) as orders_count FROM `orders`',
        [],
        'rows'
    );
//    var_dump($productsCount);

    return $ordersCount;
}

function getOrders($pdo){

    global $_config, $_page;
    $orders = sql($pdo,
//        'SELECT * FROM `orders`',
        'SELECT * FROM `orders`
        ORDER BY `id` DESC
        LIMIT '.($_page*20).','.$_config['items_on_page'],
        [],
        'rows'
    );

    return $orders;
}

function getOrder($pdo, $id){
    $order = sql($pdo,
        'SELECT * FROM `orders` WHERE `id` = ?',
        [$id],
        'rows'
    );

    return $order;
}

function saveOrder( $pdo, $userData ) {

    if($userData['status']=='closed'){
        $order = sql($pdo,
            'UPDATE `orders` set       
          `status` = "'. $userData['status'] .'",
          `delivered_at` = "'.date('Y-m-d H:i:s').'"
          WHERE `id` = '.$userData['id']
        );
    }
    else {
        $order = sql($pdo,
            'UPDATE `orders` set       
          `status` = "' . $userData['status'] . '"
          WHERE `id` = ' . $userData['id']
        );
    }
    return $order;
}

function createOrder($pdo, $user_id, $product_ids, $create_at, $delivered_at){
//    TODO: createOrder
    $insert = $pdo->prepare("INSERT INTO 
                `orders`(`user_id`, `product_ids`, `create_at`, `delivered_at`) VALUES (?,?,?,?)");
    $res = $insert->execute(array($user_id, $product_ids, $create_at, $delivered_at));
    return $res;
}

function deleteOrder( $pdo, $orderId ){
    $delete = $pdo->prepare("DELETE FROM `orders` WHERE `id`= (?)");
    $delete->execute(array($orderId));

    //or
    //$delete = $pdo->prepare("DELETE FROM `users` WHERE `id`= (?)");
    //$delete->execute();

    return $delete;
}