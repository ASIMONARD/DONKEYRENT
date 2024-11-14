<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_form_vehicle.css">
    <title>Ajout de véhicule</title>
</head>
<body>
    <h1>Ajout de vehicule</h1>
    <div>
        <form action="" method="post">
            <p>
                <label for="registration">N° d'immatriculation</label>
                <input type="text" name="registration" id="registration" require>
            </p>
            <p>
                <label for="category">Tourisme</label>
                <input type="checkbox" name="category" id="category" require>
                <label for="category">Utilitair</label>
                <input type="checkbox" name="category" id="category" require>
            </p>
            <p>
                <label for="sedan">Berline</label>
                <input type="checkbox" name="sedan" id="sedan" require>
                <label for="estateCare">Break</label>
                <input type="checkbox" name="estateCare" id="estateCare" require>
                <label for="van">fourgon</label>
                <input type="checkbox" name="van" id="van" require>
                <label for="minivan">fourgonnette</label>
                <input type="checkbox" name="minivan" id="minivan" require>
                <label for="motocycle">moto</label>
                <input type="checkbox" name="motocycle" id="motocycle" require>
            </p>
            <p>
                <label for="brand">Marque</label>
                <input name="brand" id="brande"></input>
            </p>
            <p>
                <label for="model">Modèle</label>
                <input type="text" name="model" id="model" require>
                <label for="modelYear">Année modèle</label>
                <input type="num" name="modelYear" id="modelYear" require>
                <label for="km">Kilomètrage</label>
                <input type="nember" name="km" id="km" require>km
            </p>
            <p>
                <label for="doors">Nombre de portes</label>
                <input type="text" name="doors" id="doors" require>
            </p>
            <p>
                <label for="seats">Nombre de sièges</label>
                <input type="text" name="seats" id="seats" require>
            </p>
            <p>
                <label for="gearBox">Manuelle</label>
                <input type="checkbox" name="gearBox" id="gearBox" require>
                <label for="gearBox">Automatique</label>
                <input type="checkbox" name="gearBox" id="gearBox" require>
            </p>
            <p>
                <label for="energy">Essence</label>
                <input type="checkbox" name="energy" id="energy" require>
                <label for="energy">Diesel</label>
                <input type="checkbox" name="energy" id="energy" require>
            </p>
            <p>
                <label for="airConditioning">Climatisation</label>
                <input type="checkbox" name="airConditioning" id="airConditioning">
            </p>
            <p>
                <label for="price">Prix</label>
                <input type="float" name="price" id="price" require>€
            </p>
        </form>
    </div>
</body>
</html>