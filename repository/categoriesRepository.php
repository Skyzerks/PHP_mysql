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
    global $_config, $_page;

    $categories= sql($pdo,
        'SELECT * FROM `categories` 
        ORDER BY `id` DESC 
        LIMIT '.($_page*20).','.$_config['items_on_page'],
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

function saveCategory( $pdo, $userData ){

    $category = sql($pdo,
        'UPDATE `categories` set 
          `title` = "' . $userData['title'] . '"
          WHERE `id` = ' . $userData['id']
    );

    return $category;
}


function createCategory($pdo, $title){

    $insert = $pdo->prepare("INSERT INTO `categories`(`title`) VALUES (?)");
    $res = $insert->execute(array($title));

    return $res;
}
function deleteCategory($pdo, $nameId){

    $delete = $pdo->prepare("DELETE FROM `categories` WHERE `id`= (?)");
    $delete->execute(array($nameId));

    return $delete;
}