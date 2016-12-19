<?php
// Deux tableaux pour connaître les mois et les jours de la semaine
$tabMois = array("janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre",
    "novembre", "décembre");
$tabJours = array("lundi", "mardi", "mercredi", "jeudi",
    "vendredi", "samedi", "dimanche");

function trace($data) {
    if (is_array($data)) {
        print_r($data);
    } else {
        echo $data;
    }
    echo "<br>\n";
}
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
</style>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice récapitulatif N°2</title>
        <meta charset="UTF-8">
    </head>
    <th 
<body>

    <?php
    // Jour actuel
    $jour = date("j");
    $mois = (int) date("m");
    $nbJoursMois = date("t", mktime(0, 0, 0, $mois));

    // Premier jour du mois
    $premierJour = mktime(0, 0, 0, $mois, 1);
    $jourSemaine = date("N", $premierJour);


    echo "<table>\n";
    echo "<tbody>\n";
    // Premières lignes du calendrier
    echo "<tr>\n";
    printf("<th colspan=7>Calendrier du mois de " . $tabMois[$mois - 1] .
            " " . date("Y") . "</th>\n");
    echo "</tr>\n";
    echo "<tr>\n";
    for ($i = 0; $i < count($tabJours); $i++) {
        printf("<th>" . $tabJours[$i] . "</th>\n");
    }
    echo "</tr>\n";

    // Première semaine, jours vides
    $jourCalendrier = 1;
    echo "<tr>\n";
    for ($i = 1; $i < $jourSemaine; $i++) {
        printf("<td> </td>\n");
    }

    // Première semaine, autres jours
    for (; $i <= 7; $i++, $jourCalendrier++) {
        if ($jourCalendrier == $jour) {
            printf("<td><b>" . $jourCalendrier . "</b></td>\n");
        } else {
            printf("<td>" . $jourCalendrier . "</td>\n");
        }
    }
    echo "</tr>\n";

    // Autres semaines
    echo "<tr>\n";
    $i = 0;
    do {
        if ($jourCalendrier == $jour) {
            printf("<td><b>" . $jourCalendrier . "</b></td>\n");
        } else {
            printf("<td>" . $jourCalendrier . "</td>\n");
        }
        $jourCalendrier++;
        if (++$i == 7) {
            if ($jourCalendrier <= $nbJoursMois) {
                echo "</tr>\n";
                echo "<tr>\n";
                $i = 0;
            } else {
                echo "</tr>\n";
            }
        }
    } while ($jourCalendrier <= $nbJoursMois);

    // Complète les semaines vides
    if ($i < 7) {
        for (; $i < 7; $i++) {
            printf("<td>&nbsp;</td>\n");
        }
        echo "</tr>\n";
    }

    echo "</tbody>\n";
    echo "</table>\n";
    ?>

</body>
</html>

