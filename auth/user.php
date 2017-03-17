<hr/>
<?php

echo 'Logged in as:' . '<br/>';
//echo $_POST['name'].'<br/>';
//echo $_POST['email'].'<br/>';



echo $_SESSION['login'].'<br/>';
echo $_SESSION['email'].'<br/>';

var_dump($_SESSION);
var_dump($authUser);

?>

        <a href="/"><button>Main page</button></a>
        <a href="/basket"><button>To cart</button></a>
        <a href="/logout"><button>Log Out</button></a>
    <br/>
<hr/>
