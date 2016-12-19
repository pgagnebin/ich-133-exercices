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
        <title>Exercice 9a - Création d'un tableau - boucle while</title>
        <meta charset="UTF-8">
    </head>
    <body>

        <?php
        echo "<table>\n";
        echo "<tbody>\n";
        $i = 1;
        while ($i <= 10) {
            echo "<tr>\n";
            echo "<td width=\"50px\">" . $i . "</td>\n";
            echo "</tr>\n";
            $i++;
        }
        echo "</tbody>\n";
        echo "</table>\n";
        ?>

    </body>
</html>