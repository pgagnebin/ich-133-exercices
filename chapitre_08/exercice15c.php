<!DOCTYPE html>
<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
<html lang="fr">
  <head>
    <title>Exercice 15c - Affiche le mois courant en toutes lettres</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
    echo "Nous sommes au mois de " . afficheMois(date("m")) . "<br>\n";
    ?>

  </body>
</html>
<?php

function afficheMois($mois) {
  $tableau = array("janvier", "février", "mars", "avril", "mai", "juin",
      "juillet", "août", "septembre", "octobre",
      "novembre", "décembre");
  return $tableau[$mois-1];
}
?>

