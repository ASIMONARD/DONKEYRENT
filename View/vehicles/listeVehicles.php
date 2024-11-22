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

    <table>
        <?php
        foreach ($vehicles as $vehicle) {
            ?>
            <tr>
                <td><?php   echo "<img src='/View/Photos/". $vehicle->getPhoto() . "' alt='logo'>"; ?></td>
                <td><?php   echo "<h3>" . $vehicle->getBrand() . " " . $vehicle->getModel() . "<h3><br>"; 
                            echo "<div>" . $vehicle->getmodelYear() . " " . $vehicle->getkm() . " " . $vehicle->getDoors()
                            . " " . $vehicle->getSeats() . " " . $vehicle->getgeartBox() . " " . $vehicle->getEnergy()
                            . " " . $vehicle->getCond();
                
                ?></td>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>