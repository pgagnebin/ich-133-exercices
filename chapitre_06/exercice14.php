<!DOCTYPE html>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<html lang="fr">
    <head>
        <title>Exercice 14 - Affiche le mois sans switch</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php
        $tableau = array("janvier", "février", "mars", "avril", "mai", "juin",
            "juillet", "août", "septembre", "octobre",
            "novembre", "décembre");
        $mois = date("m"); 
        echo "Nous sommes au mois de ".$tableau[$mois-1]."<br>\n";
        ?>
        
    </body>
</html>