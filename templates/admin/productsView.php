<br>
<a href="/admin/products/?method=create">Create product</a>
<br>

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
            Category id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Product title
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Price
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Description
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
    </tr>
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
                <form action="/admin/products" method="post">
                    <input type="hidden" name="method" value="delete">
                    <input type="hidden" name="id" value="<?=$product['id']?>">
                    <button type="submit">Delete</button>
                </form>
<!--                <a href="/admin/products?method=delete&id=--><?//=$product['id']?><!--">Видалити</a>-->
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