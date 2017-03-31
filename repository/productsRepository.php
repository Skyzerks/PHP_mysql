<?php

global $_config;

function getProductsCount( $pdo ) {

    $productsCount = sql($pdo,
        'SELECT COUNT(*) as products_count FROM `products`',
        [],
        'rows'
    );
//    var_dump($productsCount);

    return $productsCount;
}

function getProducts($pdo){

    global $_config, $_page;
    $products = sql($pdo,
        'SELECT * FROM `products` 
        ORDER BY `id` DESC 
        LIMIT '.($_page*20).','.$_config['items_on_page'],
        [],
        'rows'
    );

    return $products;
}

function getProduct($pdo, $id){
    $product = sql($pdo,
        'SELECT * FROM `products` WHERE `id` = ?',
        [$id],
        'rows'
    );

    return $product;
}

function saveProduct( $pdo, $userData ) {

    $product = sql($pdo,
        'UPDATE `products` set 
          `title` = "'. $userData['title'] .'",  
          `description` = "'. $userData['description'] .'",  
          `price` = "'. $userData['price'] .'",  
          `category_id` = "'. $userData['category_id'] .'"
          WHERE `id` = '.$userData['id']
    );

    return $product;
}

function createProduct($pdo, $title, $description, $price, $category_id){
    $insert = $pdo->prepare("INSERT INTO 
                `products`(`title`,`description`,`price`,`category_id`) VALUES (?,?,?,?)");
    $res = $insert->execute(array($title,$description,$price, $category_id));
    return $res;
}

function deleteProduct( $pdo, $productId ){
    $delete = $pdo->prepare("DELETE FROM `products` WHERE `id`= (?)");
    $delete->execute(array($productId));

    //or
    //$delete = $pdo->prepare("DELETE FROM `users` WHERE `id`= (?)");
    //$delete->execute();

    return $delete;
}