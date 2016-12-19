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
        <title>Exercice 9b - Création d'un tableau - boucle do..while</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php
        echo "<table>\n";
        echo "<tbody>\n";
        $i = 1;
        do {
            echo "<tr>\n";
            echo "<td width=\"50px\">" . $i . "</td>\n";
            echo "</tr>\n";
            $i++;
        } while ($i <= 10);
        echo "</tbody>\n";
        echo "</table>\n";
        ?>
        
    </body>
</html>