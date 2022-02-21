<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
<form action="formulaireexodeux.php" method="post">
Titre: <input type="text" name="title"><br>
Couleur: <input type="text" name="color"><br>
Taille: <input type="text" name="size"><br>
Poids: <input type="text" name="weight"><br>
Prix: <input type="text" name="price"><br>
Description: <input type="text" name="description"><br>
Stock: <input type="text" name="stock"><br>
Fournisseur: <input type="text" name="supplier"><br>
<input type="submit">
</form>
<?php echo $_POST["titre"]; ?><br>
<?php echo $_POST["color"]; ?><br>
<?php echo $_POST["size"]; ?><br>
<?php echo $_POST["weight"]; ?><br>
<?php echo $_POST["price"]; ?><br>
<?php echo $_POST["description"]; ?><br>
<?php echo $_POST["stock"]; ?><br>
<?php echo $_POST["supplier"]; ?>
</body>
</html>