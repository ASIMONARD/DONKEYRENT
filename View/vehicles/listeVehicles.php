<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/View/vehicles/styles_vehicles.css" rel="stylesheet">
    <title>Liste des véhicules</title>
</head>
<body>
    <h1>Liste des véhicules</h1>

    <div class="scroll-container">
        <table>
            <?php
            foreach ($vehicles as $vehicle) {
                ?>
                <tr>
                    <td><?php   echo "<img src='/View/Photos/". $vehicle->getPhoto() . "' alt='logo'><br><br><br>"; ?></td>
                    <td><?php   echo "<div class='brandModel'>" . $vehicle->getBrand() . " " . $vehicle->getModel() . "</div>"; 
                                echo "<div>" . " " . $vehicle->getDoors() . " ". "portes" . " " . "-" . " " . $vehicle->getSeats() . " " . "places" . "<br>"
                                . "Boîte de vitesse : " . "<br>". $vehicle->getGearBox() . "<br>" . " Energie : ". $vehicle->getEnergy() . "<br>" .$vehicle->getAirCond() . "</div>"
                    ?>
                        <div class="prix"><?php echo "Prix pour la journée : " . $vehicle->getPrice() . " €"?><button><a href="booking/book">Réserver</a></button></div>
                        <br><br><br>
                    </td>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>