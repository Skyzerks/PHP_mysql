<?php


foreach( $data as $key => $product ) {
    echo $product['product_id'].' | '.$product['title'].' | '.$product['price'].'</a><br/>';
}
echo '<hr/>';