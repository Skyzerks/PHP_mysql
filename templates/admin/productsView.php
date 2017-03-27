<br>
<a href="/admin/products/?method=create">Create product</a>
<br>

<table style="border-collapse: collapse;">

    <?php $k=$_page*$_config['items_on_page']; ?>
    <?php foreach( $data['products'] as $product) { ?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <?= $product['id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $product['category_id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $product['title'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $product['price'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $product['description'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/products?method=edit&id=<?=$product['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/products?method=delete&id=<?=$product['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>

<div class="pagination">

    <?php pagination(
        $data['pagination']['pages_count'],
        '/admin/products'
    ); ?>


</div>