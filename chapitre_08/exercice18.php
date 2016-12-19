
<!DOCTYPE html>
<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
<html lang="fr">
  <head>
    <title>Exercice 18 - Fonctions de dates</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
    $chaine = "Nombre de camions : ";

    function ajoute_camion($mode = '') {
      global $chaine;
      static $nb = 0;
      $nb++; // on incrémente le nombre de camions
      if ($mode == "affiche") {
        echo $chaine . $nb; // on affiche le nombre de camions
      }
    }

    ajoute_camion(); // nb = 1
    ajoute_camion(); // nb = 2
    ajoute_camion(); // nb = 3
    ajoute_camion("affiche"); // affiche Nombre de camions : 4
    ?>
  </body>
</html>

