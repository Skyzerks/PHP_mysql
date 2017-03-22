<br/>
<br/>

<!--Something fantastic!<br/>-->
    <a href="/catalog"><button>Catalog</button></a>
<br/>
<?php if($_SESSION['role']=='admin'){?>
    <a href="/admin/user"><button>Users</button></a>
<?php } ?>
<!--foreach( $data['categories'] as $category ) { ?>-->
<!--    <a href="/catalog/--><?//=$category['id']?><!--">--><?//=$category['title'] ?><!--</a><br/>-->
<?php //} ?>
