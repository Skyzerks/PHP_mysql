<?php

include_once 'templates/productView.php';


    function buy_product($id)
    {
        $_SESSION['basket'][]= $id;
        echo 'Added to basket';
    }
    if (isset($_POST['btn']))
        buy_product($_id);
