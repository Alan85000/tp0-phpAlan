<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <a href="lienexocinq.php?Message=Bienvenue%20Alan" title="Envoyer">Mon super lien !</a>
    <a href="lienexocinq.php?Messagedeux=ça%20marche!!!" title="Envoyerdeux">Mon deuxième super lien !</a>
    <?php echo $_GET['Message']; ?>
    <?php echo $_GET['Messagedeux']; ?>
</body>
</html>