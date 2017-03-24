<?php

function getCategoriesCount( $pdo ) {

    $categoriesCount = sql($pdo,
        'SELECT COUNT(*) as categories_count FROM `categories`',
        [],
        'rows'
    );

    return $categoriesCount;
}

function getCategories( $pdo ) {
    $categories = sql($pdo,
        'SELECT * FROM `categories` ORDER BY `title`',
        [],
        'rows'
    );

    return $categories;
}

function getCategory($pdo, $id){
    $category = sql($pdo,
        'SELECT * FROM `categories` WHERE `id` = ?',
        [$id],
        'rows'
    );

    return $category;
}

function createCategory($pdo){

    echo '<br> createCategory() cap <br>';
}
function deleteCategory($pdo){

    echo '<br> createCategory() cap <br>';
}