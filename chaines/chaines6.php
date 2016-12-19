<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Exercice chaînes 6 - compte les occurences - insensible à la casse</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php

    function str_icountoccur($entree, $occurence) {
      $pos = 0;
      $offset = 0;
      $compteur = 0;
      $maxlen = strlen($entree);

      do {
        $pos = stripos($entree, $occurence, $offset);
        if ($pos !== false) {
          $compteur++;
          $offset = $pos + 1;
        }
      } while ($pos !== false && $offset < $maxlen);

      return $compteur;
    }

    $phrase = "On tue un homme : on est un assassin. On en tue des millions : on est un conquérant. On les tue tous : on est un Dieu";
    $mot = "on";
    
    echo "Le mot \"" . $mot . "\" a été trouvé " . str_icountoccur($phrase, $mot) . " fois<br>\n";
    ?>
  </body>
</html>

