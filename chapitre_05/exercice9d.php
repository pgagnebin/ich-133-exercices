<!DOCTYPE html>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px
    }
</style>
<html lang="fr">
    <head>
        <title>Exercice 9d - Création d'un tableau - break</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php
        echo "<table>\n";
        echo "<tbody>\n";
        $arret = 7;
        for ($i = 1; $i <= 10; $i++) {
            if ($i == $arret) {
                break;
            }
            echo "<tr>\n";
            echo "<td width=\"50px\">$i</td>\n";
            echo "</tr>\n";
        }
        echo "</tbody>\n";
        echo "</table>\n";
        ?>
        
    </body>
</html>