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
        <form action="processing_add_vehicles.php" method="post">
            <div>
                <label for="registration">N° d'immatriculation</label>
                <input type="text" name="registration" id="registration" require>
            </div>
            <div>
                <label for="tourism">Tourisme</label>
                <input type="radio" name="category" id="tourism" value="Tourisme" require>
                <label for="utilitaire">Utilitaire</label>
                <input type="radio" name="category" id="utiltaire" value="Utilitaire" require>
            </div>
            <div>
                <label for="sedan">Berline</label>
                <input type="radio" name="type" id="sedan" value="Berline" require>
                <label for="estateCare">Break</label>
                <input type="radio" name="type" id="estateCare" value="Break" require>
                <label for="van">Fourgon</label>
                <input type="radio" name="type" id="van" value="Fourgon" require>
                <label for="motocycle">Moto</label>
                <input type="radio" name="type" id="motocycle" value="Moto" require>
            </div>
            <div>
                <label for="brand">Marque</label>
                <input type="text" name="brand" id="brand"></input>
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
                <input type="number" name="doors" id="doors" require>
            </div>
            <div>
                <label for="seats">Nombre de sièges</label>
                <input type="number" name="seats" id="seats" require>
            </div>
            <div>
                <label for="gearBox">Manuelle</label>
                <input type="radio" name="gearBox" id="gearBox" value="Manuelle" require>
                <label for="gearBox">Automatique</label>            
                <input type="radio" name="gearBox" id="gearBox" value="Automatique" require>
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
                <input type="number" name="price" id="price" require>€
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