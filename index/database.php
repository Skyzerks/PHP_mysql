<?php

echo __FILE__.' in progress'.'<br/>';

// Configs
define("host", "localhost"); //server address
define("user", "root");
define("pass", "1111");
define("dbname", "base");
// Connect to database
try {
    $pdo = new PDO("mysql:host=".host.";dbname=".dbname.";charset=utf8mb4", user, pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

