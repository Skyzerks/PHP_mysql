<?php

echo 'Logged in as:' . '<br/>';
echo $_SESSION['login']['name'].'<br/>';
echo $_SESSION['login']['email'].'<br/>';
?>

<a href="/basket">
    <button>To cart</button>
</a>
<a href="/logout">
    <button>Log Out</button>
</a>
<br/>
<hr/>
