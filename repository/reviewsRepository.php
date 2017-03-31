<?php

global $_config;

function getReviewsCount( $pdo ) {

    $reviewsCount = sql($pdo,
        'SELECT COUNT(*) as reviews_count FROM `reviews`',
        [],
        'rows'
    );

    return $reviewsCount;
}

function getReviews( $pdo ) {
    global $_config, $_page;
    $reviews = sql($pdo,
        'SELECT * FROM `reviews` 
        ORDER BY `id` DESC 
        LIMIT '.($_page*20).','.$_config['items_on_page'],
        [],
        'rows'
    );

    return $reviews;
}

function getReview( $pdo, $id) {

    $review = sql($pdo,
        'SELECT * FROM `reviews` WHERE `id` = '.$id,
        [],
        'rows'
    );

    return $review[0];
}

function saveReview( $pdo, $reviewData ) {

    $review = sql($pdo,
        'UPDATE `reviews` set 
          `user_id` = "'. $reviewData['user_id'] .'",  
          `product_id` = "'. $reviewData['product_id'] .'",  
          `created_at` = "'. date('Y-m-d H:i:s') .'",  
          `text` = "'. $reviewData['text'] .'",  
          `rating` = "'. $reviewData['rating'] .'"
          WHERE `id` = '.$reviewData['id']
    );
    //TODO: saveReview()

    return $review;
}

function createReview($pdo, $reviewData){
    $insert = $pdo->prepare("INSERT INTO reviews(`user_id`,`product_id`,`created_at`,`text`,`rating`) VALUES (?,?,?,?,?)");
    $res = $insert->execute(array($reviewData['user_id'],$reviewData['product_id'],date('Y-m-d H:i:s'), $reviewData['text'], $reviewData['rating']));

    return $res;
}

function deleteReview( $pdo, $reviewId ){
    $delete = $pdo->prepare("DELETE FROM `reviews` WHERE `id`= (?)");
    $delete->execute(array($reviewId));

    //or
    //$delete = $pdo->prepare("DELETE FROM `users` WHERE `id`= (?)");
    //$delete->execute();

    return $delete;
}
