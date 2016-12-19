<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Exercice chaînes 3 - statistiques</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php

    function str_statistics($entree) {
      $stats = array();
      $stats['nbWords'] = sizeof(split(" ", $entree));
      $espaces = 0;
      for ($i=0; $i<strlen($entree); $i++){
        if ($entree[$i] == ' ') {
          $espaces++;
        }
      }
      
      $stats['nbChars'] = strlen($entree) - $espaces;
      $stats['nbSpaces'] = $espaces;

      return $stats;
    }

    $msg = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,".
            " sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.".
            " Ut enim ad minim veniam,".
            " quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.".
            " Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.".
            " Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    
    
    echo "<u>Statistiques de la phrase : </u><br>\n".$msg."<br>\n";
            
    echo "<pre>";
    print_r(str_statistics($msg));
    echo "</pre>";
    ?>
  </body>
</html>

