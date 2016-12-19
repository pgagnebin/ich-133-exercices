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
    <title>Exercice 16 - Fonctions de dates</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
    echo "Nous sommes au mois de " . mois_courant() . "<br>\n";
    ?>

  </body>
</html>

