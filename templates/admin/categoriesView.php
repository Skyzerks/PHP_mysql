<?php
//create a CRUD
//
//var_dump($data);
//exit();
?>

<br>
<a href="/admin/categories/?method=create">Create category</a>
<br>



<br>
<table style="border-collapse: collapse;">

    <?php $k=$_page*$_config['items_on_page']; ?>

    <tr  style="border-collapse: collapse;">
        <td style="border: solid 1px black; padding: 10px">
            Number
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Title
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
    </tr>
    <?php foreach ($data['categories'] as $category){?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
<!--                <a href="/admin/categories?method=categories&id=--><?//=$category['id']?><!--">--><?//= $category['title'] ?><!--</a>-->
                <?=$category['title']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/categories?method=edit&id=<?=$category['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
<!--                <form action="/admin/categories" method="post">-->
<!--                    <input type="hidden" name="method" value="delete">-->
<!--                    <input type="hidden" name="id" value="--><?//=$category['id']?><!--">-->
<!--                    <button type="submit">Delete</button>-->
<!--                </form>-->
                <a href="/admin/categories?method=delete&id=<?=$category['id']?>">Видалити</a>
            </td>

        </tr>
    <?php } ?>

</table>



<!--<select name="form[category]" id="">-->
<!---->
<!---->
<!---->
<!--    --><?php //foreach( $data['categories'] as $category ) { ?>
<!---->
<!--        <option value="--><?//=$category['id'] ?><!--">-->
<!--            --><?//=$category['title'] ?>
<!--        </option>-->
<!---->
<!--    --><?php //} ?>
<!---->
<!--</select>-->


<div class="pagination">

    <?php pagination(
        $data['pagination']['pages_count'],
        '/admin/categories'
    ); ?>


</div>

