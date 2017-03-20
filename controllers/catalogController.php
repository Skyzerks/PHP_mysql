<?php //echo __FILE__.'<br/>';

if($_action=='catalog' && isset($_id)){

    $category = getCategory($pdo, $_id)[0];
    $products = getProducts($pdo, $_id);
    //use function to add bootstrap
    view('category', ['category' => $category, 'products' => $products]);
}
else {
    $categories = ($pdo->query('SELECT * FROM `categories`'));
    view('catalog', ['categories' => $categories ]);
}

//if( $_action == 'catalog' && $_id ) {
//
//    $category = sql( $pdo,
//        'SELECT * FROM `categories` WHERE `id` = '.$_id,
//        [],
//        'rows'
//    );
//
//    $products = sql( $pdo,
//        'SELECT * FROM `products` WHERE `category_id` = '.$_id,
//        [],
//        'rows'
//    );
//    echo '<h1>'.$category[0]['title'].'</h1>';
//
//    foreach( $products as $product ) {
//        echo '<a href="/product/'.$product['id'].'">'.$product['title'].'</a><br/>';
//    }
//}
//if( $_action == 'product' && $_id ) {
//
//    $product = sql($pdo,
//        'SELECT * FROM `products` WHERE `id` = ' . $_id,
//        [],
//        'rows'
//    );
//
//    echo '<h1>' . $product[0]['title'] . '</h1>';
//    echo '<p>' . $product[0]['description'] . '</p>';
//    echo '<p>Price: ' . $product[0]['price'] . '</p>';
//    echo '<button>Buy</button>';
//}
