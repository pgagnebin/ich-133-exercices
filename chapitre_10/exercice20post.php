<?php
require("./includes/helper.inc.php");
?>
<!DOCTYPE html>
</style>
<html lang="fr">
    <head>
        <title>Exercice 20 - Formulaire en POST</title>
        <link rel="stylesheet" href="includes/styles.css">
        <meta charset="UTF-8">
    </head>
    <body>

        <form action="exercice20posta.php" method="POST">
            <label>Nom : </label><input type="text" name="nom" value="" size="20" /><br>
            <label>Email : </label><input type="text" name="email" value="" size="20" /><br>
            <label>Note : </label><input type="radio" name="note" value="1">Insuffisant</input><br>
            <label>&nbsp;</label><input type="radio" name="note" value="2">Suffisant</input><br>
            <label>&nbsp;</label><input type="radio" name="note" value="3">Bien</input><br>
            <label>&nbsp;</label><input type="radio" name="note" value="4">Très bien</input><br>
            <label>Message : </label> <textarea name="message" cols="20" rows="5">Contenu</textarea><br>
            <input type="submit" name="envoyer" value="envoyer"/>
        </form>
    </body>
</html>
