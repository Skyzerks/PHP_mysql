<h1><?=$data['category']['title'] ?></h1>

<?php foreach( $data['products'] as $key => $product ) { ?>
    <a href="/product/<?=$product['id']?>"><?=$product['title']?></a><br/>
<?php } ?>
