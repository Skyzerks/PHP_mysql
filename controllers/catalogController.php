<?php //echo __FILE__.'<br/>';

if($_action=='catalog'){
    if(isset($_id)){
        $catalog = ($db->query('SELECT * FROM `categories`'));
        // var_dump( $categories->rowCount() );

        foreach( $catalog as $key => $product ) {
            print_r($product);
            echo '<br/>';
        }
        echo '<hr/>';
    }
    else{
        $catalog = ($pdo->query('SELECT * FROM `categories`'));
        // var_dump( $categories->rowCount() );

        foreach( $catalog as $key => $product ) {
            print_r($product);
            echo '<br/>';
        }
        echo '<hr/>';


//        $categories = sql( $db, 'SELECT * FROM `categories`', [], 'rows' );
//
//        foreach( $categories as $category ) {
//
//            echo '<a href="/catalog/'.$category['id'].'">'.$category['title'].'</a><br/>';
//
//        }

    }

}