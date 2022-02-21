<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche technique</title>
</head>
<body>
La marque de cette voiture est: <?php echo $_POST["make"]; ?><br>
Le modèle est: <?php echo $_POST["model"]; ?><br>
Sa couleur est: <?php echo $_POST["color"]; ?><br>
Son nombre de kms est: <?php echo $_POST["mileage"]; ?><br>
Son type de carburant est: <?php echo $_POST["fuel"]; ?><br>
Elle a été mise en circulation en: <?php echo $_POST["year"]; ?><br>
Son prix est: <?php echo $_POST["price"]; ?><br>
Elle totalise <?php echo $_POST["horse"]; ?>chevaux
</body>
</html>