<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Exercice chaînes 6 - compte les occurences - insensible à la casse</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php

    function str_count1occur($entree, $occurence) {
      $pos = 0;
      $offset = 0;
      $compteur = 0;
      $maxlen = strlen($entree);

      do {
        $pos = strpos($entree, $occurence, $offset);
        if ($pos !== false) {
          $compteur++;
          $offset = $pos + 1;
        }
      } while ($pos !== false && $offset < $maxlen);

      return $compteur;
    }
    
    
    function str_icount1occur($entree, $occurence) {
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

    function str_icountoccur($entree, array $occurences) {
      $mots = array();
      foreach ($occurences as $mot) {
        $mots[$mot] = str_icount1occur($entree, $mot);
      }
      
      return $mots;
    }
    
    function str_countoccur($entree, array $occurences) {
      $mots = array();
      foreach ($occurences as $mot) {
        $mots[$mot] = str_count1occur($entree, $mot);
      }
      
      return $mots;
    }
    

    $phrase = "On tue un homme : on est un assassin. On en tue des millions : on est un conquérant. On les tue tous : on est un Dieu";
    $mots = array("on", "tue", "un", "Dieu", "ceff");

    echo "<pre>\n";
    print_r(str_icountoccur($phrase, $mots));
    print_r(str_countoccur($phrase, $mots));
    echo "</pre>\n";
    ?>
  </body>
</html>

