<?php

foreach( $data['products'] as $product ) {
    echo $product['id'].' | '.$product['title'].' | '.$product['price'].'</a><br/>';
}
echo '<hr/>';

?>

<form action="/order">

    <textarea name="comment" id="" cols="30" rows="10"></textarea>

    <button type="submit">ORDER SEND</button>

</form>
