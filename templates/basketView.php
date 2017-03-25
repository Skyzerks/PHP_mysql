

<table style="border-collapse: collapse;">
    <?php $k=0?><!--    $_page*$_config['items_on_page']; ?>-->
    <tr  style="border-collapse: collapse;">
        <td style="border: solid 1px black; padding: 10px">
            Number
        </td>
        <td style="border: solid 1px black; padding: 10px">
            id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Name
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Price
        </td>
    </tr>
    <?php foreach ($data['products'] as $product) { ?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <?= $product['id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $product['title'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$product['price']?>
            </td>
<!--            <td style="border: solid 1px black; padding: 10px">-->
<!--                --><?php //unset($product);?><!--">Видалити</a>-->
<!--            </td>-->
        </tr>
    <?php } ?>
</table>
<hr/>

<!--foreach ($data['products'] as $product) {-->
<!--    echo $product['id'] . ' | ' . $product['title'] . ' | ' . $product['price'] . '</a><br/>';-->
<!--}-->
<!--echo '<hr/>';-->
<!---->
<!--?>-->

<!--<table class="table table-condensed">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>#</th>-->
<!--        <th>First Name</th>-->
<!--        <th>Last Name</th>-->
<!--        <th>Username</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    <tr>-->
<!--        <th scope="row">1</th>-->
<!--        <td>Mark</td>-->
<!--        <td>Otto</td>-->
<!--        <td>@mdo</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <th scope="row">2</th>-->
<!--        <td>Jacob</td>-->
<!--        <td>Thornton</td>-->
<!--        <td>@fat</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <th scope="row">3</th>-->
<!--        <td colspan="2">Larry the Bird</td>-->
<!--        <td>@twitter</td>-->
<!--    </tr>-->
<!--    </tbody>-->
<!--</table>-->


<form action="/order" method="POST">

<!--    <textarea name="comment" id="" cols="10" rows="3"></textarea>-->

    <button type="submit">ORDER SEND</button>

</form>
