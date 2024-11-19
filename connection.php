<?php

require_once 'D:\DONKEY-SCHOOL\Projets\password.php';

$dsn = "mysql:dbname=donkeyrent;host=localhost";
$user = "root";

try {
    $pdo = new PDO ($dsn, $user, PASSWORD);
} catch (PDOException $e) { 
    error_log($e->getMessage());
    exit ('Echec de connection');
}
echo 'Connecté';
?>