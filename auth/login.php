<form id="authForm" action="/login" method="POST" enctype="multipart/form-data">
    <input type="text" id="name" name="name" placeholder="Name"> <br/>
    <input type="text" id="email" name="email" placeholder="Email"> <br/>
    <input type="text" id="message" name="message" placeholder="Message"> <br/>

    <button type="submit">Log In</button>

</form>


<?php



if(($_POST)!= null){

    echo 'Logged in as:'.'<br/>';

    echo $_POST['name'] . '<br/>';
    echo $_POST['email'] . '<br/>';
    echo $_POST['message'] . '<br/>';
    $_action='main';
    include_once 'index/controller.php';
}

//if($_action=='login'){
//    if($login&&$pass){
//
//    }
//}









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
