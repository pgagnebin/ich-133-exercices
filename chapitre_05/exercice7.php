<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>Exercice 7</title>
    <meta charset="UTF-8">
    </head>
    <body>
        
    <?php
        $seconde = date("s");
        
        echo "Secondes = " .$seconde."<br>\n";
        if ($seconde % 2 == 0) {
            echo "--> est pair!<br>\n";
        }
    ?>
        
    </body>
</html>

