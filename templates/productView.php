<?php

echo '<h1>' . $data[0]['title'] . '</h1>';
echo '<p>' . $data[0]['description'] . '</p>';
echo '<p>Price: ' . $data[0]['price'] . '</p>';

?>
<!--    echo '<button>Buy</button>';-->

<form method='post'>
    <input type="hidden" value='Buy' name='btn'/>
    <button type='submit'>Buy</button>
</form>
