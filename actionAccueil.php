<?php
// connexion a la base de données
try {
    $dsn = "mysql:host=localhost;dbname=donkeyrent;charset=utf8";
    $user = "root";
    $password = "";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}