<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Exercice chaînes 1 - recherche des initiales</title>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <?php

    function str_firstupper($entree) {
      $mots = split(" ", $entree);
      $sortie = "";
      
      foreach ($mots as $mot) {
          $sortie .= $mot[0];
      }

      return strtoupper($sortie);
    }

    $msg = "je suis au ceff";
    echo $msg . " => " . str_firstupper($msg) ."<br>\n";
    
    
    ?>
  </body>
</html>

