<!DOCTYPE html>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<html lang="fr">
    <head>
        <title>Exercice 13 - Tableau associatif</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php
        $tableau[0]['nom'] = "Computer";
        $tableau[0]['prenom'] = "Jules";
        $tableau[1]['nom'] = "Lerdorf";
        $tableau[1]['prenom'] = "Rasmus";
        foreach ($tableau as $value) {
            print_r($value);
            echo "<br>\n";
        }
        ?>

    </body>
</html>