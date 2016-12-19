<!DOCTYPE html>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px
    }
    th {
        background-color: lightgray;
    }
    th, td {
        width: 75px;
        text-align: center;
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

        echo "<table>\n";
        echo "<tbody>\n";
        echo "<tr>\n";
        echo "<th>index</th>\n";
        echo "<th>nom</th>\n";
        echo "<th>prenom</th>\n";
        echo "</tr>\n";
        $i = 0;
        foreach ($tableau as $value) {
            echo "<tr>\n";
            echo "<th>" . $i++ . "</th>\n";
            echo "<td>" . $value['nom'] . "</td>\n";
            echo "<td>" . $value['prenom'] . "</td>\n";
            echo "</tr>\n";
        }
        echo "</tbody>\n";
        echo "</table>\n";
        ?>
        
    </body>
</html>