<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles_vehicles.css" rel="stylesheet">
    <title>Liste des véhicules</title>
</head>
<body>
    <h1>Liste des véhicules</h1>

    <div>
    
    <?php

    foreach ($vehicles as $vehicle) {
        echo "<div><img src='/View/Photos/". $vehicle->getPhoto() . "' alt='logo'></div>";
        echo "<h2>" . $vehicle->getBrand() . " " . $vehicle->getModel() . "</h2>" . "<br>";   
    }
    ?>
    </div>
    
</body>
</html>