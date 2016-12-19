<?php
// Tableau de la liste de classe
$maClasse = array("Aberchane Gaetano",
    "Allimann Jonathan",
    "Collins Patrice",
    "Dongmo Emeline",
    "Egger Kelly",
    "Feligha Mehdi",
    "Lacovelli Reza",
    "Mischler Oceane",
    "Milonari Oscar",
    "Reymond Kevin",
    "Soylen Coralie",
    "Tafilaj Arnaud",
    "Tschanz Mathieu",
    "Turler Luca",
    "Bassin Thomas",
    "Bianco Lionel",
    "Corbat Kevin",
    "Criblez Dylan",
    "Hounnou Jonathan",
    "Leiber Quentin",
    "Romao Guillaume",
    "Trandafir Alex",
    "Tsegaye Brian",
    "Worni Rafael",
    "Habegger",
    "Gerard",
    "Di Paolo Laszlo");
?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px
    }
    th {
        background-color: lightgray;
    }
    th, td {
        width: 75px;
        text-align: center;
    }
</style>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice récapitulatif N°3</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        $toto = 0;
        // 2) Affichage "de base"
//        echo "<pre>";
//        print_r($maClasse);
//        echo "</pre>";
//        
        // 3) Séparation des noms et de sprénoms
//        for ($i = 0; $i < count($maClasse); $i++) {
//          // Séparation dans le tableau $noms
//          $noms = explode(' ', $maClasse[$i]);
//          // Affiche seln la forme demandée
//          echo "<b>$noms[0]</b> <em>$noms[1]</em><br>\n";
//        }
//        // 4) Séparation des noms et des prénoms
//        for ($i = 0; $i < count($maClasse); $i++) {
//          // Séparation dans le tableau $noms
//          $noms = explode(' ', $maClasse[$i]);
//          // Teste les cas possibles
//          switch (count($noms)) {
//            // Pas de prénom, vérifie si il existe
//            case 1 : {
//                echo "<b>" . $maClasse[$i] . "</b> <em>";
//                if ($i < count($maClasse) - 1) {
//                  echo $maClasse[$i + 1] . "</em><br>\n";
//                  $i++;
//                } else {
//                  echo "<font color=\"red\">PAS DE PRENOM</font></em><br>\n";
//                }
//                break;
//              }
//            // Nom et prénom, cas "normal"
//            case 2 : {
//                echo "<b>$noms[0]</b> <em>$noms[1]</em><br>\n";
//                break;
//              }
//            // Deux noms, un prénom 
//            case 3 : {
//                echo "<b>$noms[0] $noms[1]</b> <em>$noms[2]</em><br>\n";
//                break;
//              }
//          }
//        }
        // 5) Nouveau tableau avec un identifiant comme clé
        $classeCeff = array();
        $compteur = 0;
        for ($i = 0; $i < count($maClasse); $i++) {
          // Séparation dans le tableau $noms
          $noms = explode(' ', $maClasse[$i]);
          // Teste les cas possibles
          switch (count($noms)) {
            // Pas de prénom, vérifie si il existe
            case 1 : {
                if ($i < count($maClasse) - 1) {
                  $noms[1] = $maClasse[$i + 1];
                  $i++;
                } else {
                  $noms[1] = "";
                }
                break;
              }
            // Deux noms, un prénom 
            case 3 : {
                $noms[0] = $noms[0] . " " . $noms[1];
                $noms[1] = $noms[2];
                $noms[2] = null;
                break;
              }
          }
          // Cération de la clé
          $key = strtoupper(substr($noms[1], 0, 1) . substr($noms[0], 0, 2));
          // Attribution de la clé
          $classeCeff[$key]['nom'] = $noms[0];
          $classeCeff[$key]['prenom'] = $noms[1];
          $compteur++;
        }
        // Affiche le tableau
        foreach ($classeCeff as $key => $noms) {
          echo $key . " - <b>" . $noms['nom'] . "</b> <em>" .
          $noms['prenom'] . "</em><br>\n";
        }
        echo $compteur . " noms ont été analysés<br>";
        echo count($classeCeff) . " noms ont été atttribués<br>";

        // 6) Création des groupes
        $groupes = array();
        // Nb de groupes
        $nbGroupes = floor(count($classeCeff) / 3);
        echo $nbGroupes . " groupes seront créés<br>";
        
        // Remplissage des groupes
        $groupe = 0;
        foreach ($classeCeff as $key => $eleve) {
          $nomGroupe = "groupe " . ($groupe + 1);
          // Vérifie si le grupe existe, sinon le créé
          if (!isset($groupes[$nomGroupe])) {
            $groupes[$nomGroupe] = array();
          }
          $groupes[$nomGroupe][$key] = $eleve;
          // Nb maximal de groupes
          $groupe++;
          if ($groupe % $nbGroupes == 0) {
            $groupe = 0;
          }
        }
        // Affiche les groupes
        foreach ($groupes as $nom => $membres) {
          echo $nom . " (". count($membres) . " membres) : <br>";
          foreach ($membres as $key => $noms) {
            echo $key . " - <b>" . $noms['nom'] . "</b> <em>" .
            $noms['prenom'] . "</em><br>\n";
          }
        }
        ?>

    </body>
</html>

