<?php

function getCategory($pdo, $id){
    $category = sql($pdo,
        'SELECT * FROM `categories` WHERE `id` = ?',
        [$id],
        'rows'
    );

    return $category;
}
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
