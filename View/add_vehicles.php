<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_vehicles.css">
    <title>Ajout de véhicule</title>
</head>
<body>
    <h1>Ajout de vehicule</h1>
    <div class="formDiv">
        <form action="../Controle/processing_add_vehicles.php" method="post">
            <div>
                <label for="registration">N° d'immatriculation</label>
                <input type="text" name="registration" id="registration" require>
            </div>
            <div>
                <label for="tourism">Tourisme</label>
                <input type="radio" name="category" id="tourism" require>
                <label for="utilitaire">Utilitaire</label>
                <input type="radio" name="category" id="utiltaire" require>
            </div>
            <div>
                <label for="sedan">Berline</label>
                <input type="radio" name="type" id="sedan" require>
                <label for="estateCare">Break</label>
                <input type="radio" name="type" id="estateCare" require>
                <label for="van">fourgon</label>
                <input type="radio" name="type" id="van" require>
                <label for="minivan">fourgonnette</label>
                <input type="radio" name="type" id="minivan" require>
                <label for="motocycle">moto</label>
                <input type="radio" name="type" id="motocycle" require>
            </div>
            <div>
                <label for="brand">Marque</label>
                <input name="brand" id="brand"></input>
            </div>
            <div>
                <label for="model">Modèle</label>
                <input type="text" name="model" id="model" require>
                <label for="modelYear">Année modèle</label>
                <input type="number" name="modelYear" id="modelYear" require>
                <label for="km">Kilomètrage</label>
                <input type="number" name="km" id="km" require>km
            </div>
            <div>
                <label for="doors">Nombre de portes</label>
                <input type="num" name="doors" id="doors" require>
            </div>
            <div>
                <label for="seats">Nombre de sièges</label>
                <input type="num" name="seats" id="seats" require>
            </div>
            <div>
                <label for="gearBox">Manuelle</label>
                <input type="radio" name="gearBox" id="gearBox" require>
                <label for="gearBox">Automatique</label>            
                <input type="radio" name="gearBox" id="gearBox" require>
            </div>
            <div>
                <label for="energy">Essence</label>
                <input type="radio" name="energy" id="energy" value="Essence">
                <label for="energy">Diesel</label>
                <input type="radio" name="energy" id="energy" value="Diesel">
            </div>
            <div>
                <label for="airCond">Climatisation</label>
                <input type="radio" name="airCond" id="airCond" value="Climatisation">
            </div>
            <div>
                <label for="price">Prix</label>
                <input type="num" name="price" id="price" require>€
            </div>
            <div>
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" require>
            </div>
            <div>
                <input type="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</body>
</html>