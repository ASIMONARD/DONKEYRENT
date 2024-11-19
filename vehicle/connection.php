<?php

require_once 'password.php';

$dsn = "mysql:dbname=donkeyrent;host=localhost";
$user = "root";

try {
    $pdo = new PDO ($dsn, $user, $pswd);
} catch (PDOException $e) {
    error_log($e->getMessage());
    exit ('Echec de connection');
}
echo 'Connecté';
?>