<?php
// Deux tableaux pour connaître les mois et les jours de la semaine
$tabMois = array("janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre",
    "novembre", "décembre");
$tabJours = array("lundi", "mardi", "mercredi", "jeudi",
    "vendredi", "samedi", "dimanche");
?>
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
	
	table.pga_info, td.pga_info {
        border: 5px solid black;
        border-collapse: collapse;
        padding: 5px
	}	
</style>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice récapitulatif N°1</title>
        <meta charset="UTF-8">
    </head>
    <body>

        <?php
        // Jour et mois actuels
        $jourSemaine = date("N");
        $mois = (int) date("m");
        printf("Aujourd'hui, nous sommes le %s %d %s %d<br>\n", 
                $tabJours[$jourSemaine - 1], date("j"),
                $tabMois[$mois - 1], date("Y"));

        // Calcule pour le lundi de la semaine
        $time = mktime();
        $newTime = $time - (24 * 60 * 60 * ($jourSemaine - 1));
        
        // Jour et mois dès lundi
        $jourSemaine = date("N", $newTime);
        $mois = (int) date("m", $newTime);
        printf("Le premier jour de la semaine est le %s %d %s %d<br><br>\n",
                $tabJours[$jourSemaine - 1], date("j", $newTime),
                $tabMois[$mois - 1], date("Y", $newTime));
        
        // Affiche la semaine dans un tableau
        echo "<table>\n";
        echo "<tbody>\n";
        echo "<tr>\n";
        for ($i = 0; $i < count($tabJours); $i++) {
            printf("<th>" . $tabJours[$i] . "</th>\n");
        }
        echo "</tr>\n";
        echo "<tr>\n";
        for ($i = 0; $i < count($tabJours); $i++, $newTime += (24 * 60 * 60)) {
            if ($time == $newTime) {
                printf("<td><b>%d.%d.%d</b></td>\n", date("j", $newTime),
                        date("m", $newTime), date("Y", $newTime));
            } else {
                printf("<td>%d.%d.%d</td>\n", date("j", $newTime),
                        date("m", $newTime), date("Y", $newTime));
            }
        }
        echo "</tr>\n";

        echo "</tbody>\n";
        echo "</table>\n";
        ?>

    </body>
</html>

