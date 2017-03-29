<?php
    $headerRouts = [
        'Home'      => '',
        'Users'     => '/user',
        'Categories'=> '/categories',
        'Products'  => '/products',
        'Reviews'   => '/reviews',
        'Orders'    => '/orders'
    ];
?>
<?php foreach ($headerRouts as $name => $route){?>
<a href="/admin<?=$route?>"><?=$name?></a>|
<?php } ?>
<!---->
<!--<a href="/admin">Home</a> |-->
<!--<a href="/admin/user">Users</a> |-->
<!--<a href="/admin/category">Categories</a> |-->
<!--<a href="/admin/product">Products</a> |-->
<!--<a href="/admin/review">Reviews</a> |-->
<!--<a href="/admin/order">Orders</a>-->
<!--<br/>-->
<!--<br/>-->