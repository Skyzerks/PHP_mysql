<?php

function getProducts($pdo, $category_id){
    $products = sql($pdo,
        'SELECT * FROM `products` WHERE `category_id` = ?',
        [$category_id],
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


function createProduct($pdo){

    echo '<br> createProduct() cap <br>';
}
function deleteProduct($pdo){

    echo '<br> createProduct() cap <br>';
}