<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <a href="formulaireexosix.php?Message=Vous%20êtes%20un%20chien%20!" title="Envoyer">Chien</a>
    <a href="formulaireexosix.php?Messagedeux=Vous%20êtes%20un%20chat%20!" title="Envoyerdeux">Chat</a>
    <?php echo $_GET['Message']; ?>
    <?php echo $_GET['Messagedeux']; ?>
</body>
</html>