<?php

//echo __FILE__.' in progress'.'<br/>';


// Simple function to handle PDO prepared statements
function sql($db, $q, $params = [], $return = null) {
    var_dump($q);
//    exit();
    // Prepare statement
    $stmt = $db->prepare($q);
    // Execute statement
    $res = $stmt->execute($params);
    // Decide whether to return the rows themselves, or query status
    if ($return == "rows") {
        return $stmt->fetchAll(); //rows
    }
    else {
        return $res; //boolean
    }

}


function email_check($email){
    //if (!preg_match("~^([a-z0-9_/-/.])+@([a-z0-9_/-/.])+/.([a-z0-9])+$~i", $email)) {
    if (!preg_match("/@/", $email)) {
        return 1;
    }
    else {
        return 0;
    }
}

//view redirection
function view($_View, $data = []){

    global $_action, $_subAction, $_config, $_page;

    include "templates/header.php";

    if( $_action == 'admin' ) {
        include 'templates/admin/headerView.php';
    }

    if (file_exists('templates/'.$_View.'View.php')){
        include 'templates/'.$_View.'View.php';
    }

    include "templates/footer.php";
}


function buy_product($id)
{
    $_SESSION['basket'][]= $id;
    $_SESSION['flash_msg'] = 'Added to basket';
}
function pagination( $pagesCount, $section ) {

    global $_page;

    for( $page=0; $page < $pagesCount; $page++) {

        $curPage = $_page;

        if (($page < $curPage + 3 && $page > $curPage - 3)
            || ($page == 0)
            || ($page == $pagesCount - 1)
        ) {

            echo '<a href="'.$section.'?page='.$page.'">';
            echo ($curPage == $page) ? '<strong>' : '';
            echo $page + 1;
            echo ($curPage == $page) ? '</strong>' : '';
            echo '</a> |';
            
        }
    }
}

