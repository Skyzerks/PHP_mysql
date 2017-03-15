<form id="authForm" action="/login" method="POST" enctype="multipart/form-data">
    <input type="text" id="name" name="name" placeholder="Name"> <br/>
    <input type="text" id="email" name="email" placeholder="Email"> <br/>
<!--    <input type="text" id="message" name="message" placeholder="Message"> <br/>-->

    <button type="submit">Log In</button>

</form>


<?php



if(($_POST)!= null){

    echo 'Logged in as:'.'<br/>';

    $_SESSION['login']['name'] = $_POST['name'];
    $_SESSION['login']['email'] = $_POST['email'];

    echo $_SESSION['login']['name']. '<br/>';
    echo $_SESSION['login']['email']. '<br/>';
//    echo $_POST['message'] . '<br/>';
    $_action='main';
    include_once 'index/controller.php';

}

var_dump($_SESSION);









//if($_COOKIE['auth']=='admin'){
//    start_session();
//
//}
//else if($_COOKIE['auth']=='client'){
//
//}
//else{
//    echo 'Please log in'.'<br/>';
//}
