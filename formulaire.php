<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
<form action="formulaire.php" method="post">
Name: <input type="text" name="name"><br>
Téléphone: <input type="text" name="telephone"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<?php echo $_POST["name"]; ?><br>
<?php echo $_POST["telephone"]; ?><br>
<?php echo $_POST["email"]; ?>
</body>
</html>