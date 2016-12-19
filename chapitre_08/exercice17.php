<?php
include "./includes/dates.inc.php"
?>

<!DOCTYPE html>
<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
<html lang="fr">
  <head>
    <title>Exercice 17 - Fonctions de dates</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
    echo "Nous sommes au mois de " . mois() . "<br>\n";
    echo "Noël est en  " . mois(12) . "<br>\n";
    echo "Le mois 25 se dit  " . mois(25) . "<br>\n";
    ?>

  </body>
</html>

