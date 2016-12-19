<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Exercice chaînes 1 - Inversion d'une chaîne</title>
    <meta charset="UTF-8">
  </head>
  <body>
    
    <?php
    function str_reverse($entree) {
      $sortie = "";

      for ($i = strlen($entree)-1; $i >= 0; $i--) {
        $sortie .= $entree[$i];
      }

      return $sortie;
    }

    $msg = "hello world";
    echo $msg . " => " . str_reverse($msg) ."<br>\n";
    ?>
    
    
  </body>
</html>

