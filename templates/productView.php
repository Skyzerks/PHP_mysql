<?php

if( $_action == 'product' && $_id ) {

    $product = sql($pdo,
        'SELECT * FROM `products` WHERE `id` = ' . $_id,
        [],
        'rows'
    );

    echo '<h1>' . $product[0]['title'] . '</h1>';
    echo '<p>' . $product[0]['description'] . '</p>';
    echo '<p>Price: ' . $product[0]['price'] . '</p>';
?>
<!--    echo '<button>Buy</button>';-->

    <form method='post'>
        <input type='submit' value='Buy' name='btn'>
    </form>

<?php

    function buy_product($id)
    {
        $_SESSION['basket'][]= $id;
        echo 'Added to basket';
    }
    if (isset($_POST['btn']))
        buy_product($_id);

}