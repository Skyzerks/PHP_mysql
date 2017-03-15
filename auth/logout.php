<?php //logout operations

unset($_SESSION['login']);
var_dump($_SESSION['login']);
//session_destroy();


header('Location: /');
exit;
