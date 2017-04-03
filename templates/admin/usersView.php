<br>
<a href="/admin/user/?method=create">Create user</a>
<br>

<table style="border-collapse: collapse;">

    <?php $k=$_page*$_config['items_on_page']; ?>

    <tr  style="border-collapse: collapse;">
        <td style="border: solid 1px black; padding: 10px">
            Number
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Name
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Email
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
    </tr>
    <?php foreach( $data['users'] as $user ) { ?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <a href="/admin/user?method=view&id=<?=$user['id']?>"><?= $user['name'] ?></a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $user['email'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/user?method=edit&id=<?=$user['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
<!--                <form action="/admin/user" method="post">-->
<!--                    <input type="hidden" name="method" value="delete">-->
<!--                    <input type="hidden" name="id" value="--><?//=$user['id']?><!--">-->
<!--                    <button type="submit">Delete</button>-->
<!--                </form>-->
                <a href="/admin/user?method=delete&id=<?=$user['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>

<div class="pagination">

    <?php pagination(
        $data['pagination']['pages_count'],
        '/admin/user'
    ); ?>


</div>