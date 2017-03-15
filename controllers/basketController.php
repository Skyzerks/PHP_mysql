<?php

foreach ($_SESSION['basket'] as $id => $product){
    echo $id.' | '.$product.'<br/>';
}