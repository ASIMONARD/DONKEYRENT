<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles_vehicles.css" rel="stylesheet">
    <title>Réservations</title>
</head>
<body>
    <h1>Formulaire de réservation</h1>
    <br><br><br>
    <div class="formDiv">
        <form action="" metuod="post"></form>
            <div>
                <label for="departureTown">Ville de départ</label>
                <input type="text" name="departureTown" id="departureTown">
            </div>
            <div>
                <label for="dateTimeDeparture">Date et heure de départ</label>
                <input type="datetime-local" name="dateTimeDeparture" id="dateTimeDeparture">
            </div>
            <div>
                <label for="arrivalTown">Ville d'arrivée</label>
                <input type="text" name="arrivalTown" id="arrivalTown">
            </div>
            <div>
                <label for="dateTimeArrival">Date et heure d'arrivée</label>
                <input type="datetime-local" name="dateTimeArrival" id="dateTimeArrival">
            </div>
            <label for=""></label>
        </div>
    </div>
</html>