<?php //logout operations

//unset($_SESSION['login']);
//var_dump($_SESSION['login']);
//header('Location: /');

logout($_SESSION['login']['login']);

exit;
