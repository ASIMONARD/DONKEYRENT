<?php

require 'constant.php';

try {
    $pdo = new PDO (DB_HOST, DB_USER, DB_PASS);
} catch (PDOException $e) { 
    echo $e->getMessage();
    exit ('Echec de connection');
}

?>