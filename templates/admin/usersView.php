


<table style="border-collapse: collapse;">

    <?php $k=$_page*$_config['items_on_page']; ?>
    <?php foreach( $data['users'] as $user ) { ?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <?= $user['name'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $user['email'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/user?method=edit&id=<?=$user['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/user?method=delete&id=<?=$user['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>

<div class="pagination">

    <?php for( $page=0; $page < $data['pagination']['pages_count']; $page++ ) { ?>

        <?php $curPage = $_page; ?>

        <?php if( ($page < $curPage+3 && $page > $curPage-3)
            || ( $page == 0 )
            || ( $page == $data['pagination']['pages_count']-1 )) { ?>

            <a href="/admin/user?page=<?=$page ?>">
                <?= ( $curPage == $page ) ? '<strong>' : '' ?>
                <?=$page + 1 ?>
                <?= ( $curPage == $page ) ? '</strong>' : '' ?>
            </a> |


        <?php } ?>

    <?php } ?>

</div>