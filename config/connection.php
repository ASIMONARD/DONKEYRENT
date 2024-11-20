<?php

try {
    $pdo = new PDO (DB_HOST, DB_USER, DB_PASS);
} catch (PDOException $e) { 
    echo $e->getMessage(); die;
    exit ('Echec de connection');
}

?>