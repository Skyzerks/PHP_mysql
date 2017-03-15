<?php
include 'templates/header.php';
//something_in_the_making.php
?>
Something fantastic!<br/>
<a href="/catalog">
    <button>Catalog</button>
</a><br/>

<a href="/login">
    <button>Log In</button>
</a><br/>


    <button >Log In</button>
<?php

if($_SESSION['login']['name']&& $_SESSION['login']['email'] != null){

    echo 'Loged in as:'.'<br/>';
    echo $_SESSION['login']['name']. '<br/>';
    echo $_SESSION['login']['email'].'<br/>';

}
else{
    $_action='login';
    include_once 'index/controller';
}

include 'templates/footer.php';



//foreach( $data['categories'] as $category ) { ?>
<!--    <a href="/catalog/--><?//=$category['id']?><!--">--><?//=$category['title'] ?><!--</a><br/>-->
<?php //} ?>
