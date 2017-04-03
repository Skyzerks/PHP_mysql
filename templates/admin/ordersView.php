<?php
//create a CRUD
//
//var_dump($data);
//exit();
?>

<br>
<a href="/admin/orders/?method=create">Create order</a>
<br>

<?php global $pdo; ?>

<table style="border-collapse: collapse;">

    <?php $k=$_page*$_config['items_on_page']; ?>

    <tr  style="border-collapse: collapse;">
        <td style="border: solid 1px black; padding: 10px">
            Number
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            User Id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Product id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Created at
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Delivered at
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Status
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Total price
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
    </tr>
    <?php foreach ($data['orders'] as $key => $order){?>
        <?php $k++;?>
<!--        --><?php //if(isset($order['user_name'])){?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
<!--                <a href="/admin/categories?method=categories&id=--><?//=$category['id']?><!--">--><?//= $category['title'] ?><!--</a>-->
                <?=$order['id']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['user_name']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['product_ids']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['created_at']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['delivered_at']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['status']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['total_price']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/orders?method=edit&id=<?=$order['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <form action="/admin/orers" method="post">
                    <input type="hidden" name="method" value="delete">
                    <input type="hidden" name="id" value="<?=$order['id']?>">
                    <button type="submit">Delete</button>
                </form>
<!--                <a href="/admin/orders?method=delete&id=--><?//=$order['id']?><!--">Видалити</a>-->
            </td>
        <?php } ?>
        </tr>
<!--    --><?php //} ?>

</table>


<div class="pagination">

    <?php pagination(
        $data['pagination']['pages_count'],
        '/admin/orders'
    ); ?>


</div>

