<?php
if( $_subAction == 'reviews'&&isset($_method)){
    switch ($_method){
        case 'create': {
            $review = null;
            if($_POST){
                $review = createReview($pdo, $_POST['form']);
                $_SESSION['flash_msg'] = 'Review created';

                header('location: /admin/reviews');
                exit();
            }
            else{

//            var_dump($_POST);  //var dump
//            echo '<br>';

                $options = [
                    'users' => getUsers($pdo),
                    'product_ids' => getProducts($pdo)
                ];
                
                view('admin/createReview', ['review' => $review[0], 'options' => $options]);
            }
            break;
        }
        case 'edit':{
            $id = $_GET['id'];
            $review = getReview( $pdo, $id );

            view('admin/reviewEdit', ['review' => $review]);
            break;
        }
        case 'delete':{
            $id = $_GET['id'];
            deleteReview( $pdo, $id );

            header('location: /admin/reviews');
            exit();
            break;
        }
        case 'update':{
            $id = $_POST['form']['id'];
            $res = saveReview( $pdo, $_POST['form'] );

            $_SESSION['flash_msg']='review updated';
            header('location: /admin/reviews/?method=edit&id='.$_POST['form']['id']);
            exit();
            break;
        }
    }
}
else if( $_subAction == 'reviews' ) {

    $reviews = getReviews( $pdo );

    $allReviewsCount = getReviewsCount($pdo)[0]['reviews_count'];
    $pagination = [
        'pages_count' => ceil($allReviewsCount/ $_config['items_on_page'])
    ];

    view('admin/reviews', ['reviews' => $reviews, 'pagination' => $pagination]);
}
