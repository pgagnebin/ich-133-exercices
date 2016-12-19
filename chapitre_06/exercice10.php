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
        <title>Exercice 10 - Création d'un tableau en 2 phases</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php
        $tableau = array();
        for ($i = 0; $i < 10; $i++) {
            $tableau[] = $i+1;
        }
        
        print_r($tableau);
        echo "<br>\n";
        
        echo "<table>\n";
        echo "<tbody>\n";
        for ($i = 0; $i < count($tableau); $i++) {
            echo "<tr>\n";
            echo "<td width=\"50px\">" . $tableau[$i] . "</td>\n";
            echo "</tr>\n";
        }
        echo "</tbody>\n";
        echo "</table>\n";
		
        ?>
        
    </body>
</html>