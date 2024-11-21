<?php

require_once 'D:\DONKEY-SCHOOL\Projets\DONKEYRENT\Config\constant.php';
require_once 'D:\DONKEY-SCHOOL\Projets\DONKEYRENT\Config\connection.php';

function prepare_input($data) {
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['registration']) && !empty($_POST['category']) && !empty($_POST['type']) && !empty($_POST['brand']) && !empty($_POST['model']) && !empty($_POST['modelYear']) && !empty($_POST['km']) && !empty($_POST['doors']) && !empty($_POST['seats']) && !empty($_POST['gearBox']) && !empty($_POST['energy']) && !empty($_POST['airCond']) && !empty($_POST['price']) && !empty($_POST['photo'])) {
    
        $registration = $_POST['registration'];
        $category = $_POST['category'];
        $type = $_POST['type'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $modelYear = $_POST['modelYear'];
        $km = $_POST['km'];
        $doors = $_POST['doors'];
        $seats = $_POST['seats'];
        $gearBox = $_POST['gearBox'];
        $energy = $_POST['energy'];
        $airCond = $_POST['airCond'];
        $price = $_POST['price'];
        $photo = $_POST['photo'];

        $sql = "INSERT INTO vehicle (registration, category, type, brand, model, modelYear, km, doors, seats, gearBox, energy, airCond, price, photo) VALUES (:registration, :category, :type, :brand, :model, :modelYear, :km, :doors, :seats, :gearBox, :energy, :airCond, :price, :photo)";
        
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam('registration', $registration);
        $stmt->bindParam('category', $category);
        $stmt->bindParam('type', $type);
        $stmt->bindParam('brand', $brand);
        $stmt->bindParam('model', $model);
        $stmt->bindParam('modelYear', $modelYear);
        $stmt->bindParam('km', $km);
        $stmt->bindParam('doors', $doors);
        $stmt->bindParam('seats', $seats);
        $stmt->bindParam('gearBox', $gearBox);
        $stmt->bindParam('energy', $energy);
        $stmt->bindParam('airCond', $airCond);
        $stmt->bindParam('price', $price);
        $stmt->bindParam('photo', $photo);
    
        $stmt->execute();
        echo 'Fiche enregistrée.';
            
    } else {
        echo 'Echec. Il y a de erreurs dans la saisie';
    }
    exit;
}

?>