<?php global  $pdo; ?>

<form action="/admin/orders/?method=update" method="POST">

    <input type="hidden" name="form[id]" value="<?=$data['order']['id']?>">

<!--    <input type="text" name="form[user_id]" value="--><?//=$data['order']['title']?><!--" placeholder="Enter user id"><br/>-->
<!--    <input type="email" name="form[product_ids]" value="--><?//=$data['order']['product_ids']?><!--" placeholder="Enter price"><br/>-->
<!--    <input type="text" name="form[created_at]" value="--><?//=$data['order']['created_at']?><!--" placeholder="Enter category id"><br/>-->
<!--    <input type="text" name="form[delivered_at]" value="--><?//=$data['order']['delivered_at']?><!--" placeholder="Enter description"><br/>-->

    <?php
//    var_dump($data );

    ?>

    User: <strong><?=$data['order']['user_name']?></strong></br>
    Products: <strong><?=$data['order']['product_ids']?></strong></br>
    Total price: <strong><?=$data['order']['total_price'] ?></strong></br>
    <select name="form[status]" >
    <?php foreach ($_config['order_statuses'] as $opt) {
        $selected = '';

        if($opt==$data['order']['status']) {
            $selected = 'selected';
            }
        ?>

        <option <?=$selected?> value="<?=$opt?>"><?=$opt?></option>
    <?php
    }?>
    </select>


    </br><button type="submit">Update</button>
</form>