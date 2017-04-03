<br>
<a href="/admin/reviews/?method=create">Create review</a>
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
            User
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Product ids
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Created at
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Review
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Rating
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
    </tr>
    <?php foreach( $data['reviews'] as $review) { ?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <?= $review['id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $review['user_id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $review['product_id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $review['created_at'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $review['text'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $review['rating'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/reviews?method=edit&id=<?=$review['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
<!--                <form action="/admin/reviews" method="post">-->
<!--                    <input type="hidden" name="method" value="delete">-->
<!--                    <input type="hidden" name="id" value="--><?//=$review['id']?><!--">-->
<!--                    <button type="submit">Delete</button>-->
<!--                </form>-->
                <a href="/admin/reviews?method=delete&id=<?=$review['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>

<div class="pagination">

    <?php pagination(
        $data['pagination']['pages_count'],
        '/admin/reviews'
    ); ?>


</div>