<?php
define("PI", 3.1415926535897932384626433832795);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>Exercice 6</title>
    <meta charset="UTF-8">
    </head>
    <body>
    <?php
        // Variables
        $rayon = 12.5;
        $cirfoncerence = 2 * PI * $rayon;
        $surface = PI * pow($rayon, 2.0);
        
        // Affichage
        echo "Rayon : " .$rayon. "<br>\n";
        echo "Circonference : " .$cirfoncerence. "<br>\n";
        echo "Surface : " .$surface. "<br>\n";
        
        // Affichage avec arrondis grâce à printf
        printf("Rayon : %.2f<br>\n".
               "Circonference : %.2f<br>\n".
               "Surface : %.2f<br>\n",
                $rayon, $cirfoncerence, $surface);
    ?>
    </body>
</html>

