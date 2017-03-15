<?php

foreach( $data as $key => $product ) {
    echo '<a href="/product/'.$product['id'].'">'.$product['title'].'</a><br/>';
}
echo '<hr/>';