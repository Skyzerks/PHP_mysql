<?php
//
//echo '<h1>' . $data[0]['title'] . '</h1>';
//echo '<p>' . $data[0]['description'] . '</p>';
//echo '<p>Price: ' . $data[0]['price'] . '</p>';
//include_once 'templates/header.php';
?>
<!--    echo '<button>Buy</button>';-->

<table class="table table-striped">
    <tr>
        <td><?=$data[0]['title'] ?></td>
        <td><?=$data[0]['description'] ?></td>
        <td><?=$data[0]['price'] ?></td>
    </tr>
</table>



<form method='post'>
    <input type="hidden" value='Buy' name='btn'/>
    <button type='submit'>Buy</button>
</form>

<?php
//include_once 'templates/footer.php';
?>
