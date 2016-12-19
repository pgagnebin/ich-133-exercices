<?php
require("./includes/helper.inc.php");

function getPostVariable($id, $default = "") {
  if (isset($_POST[$id]))
    return $_POST[$id];
  else
    return $default;
}

function isChecked($radio, $id) {
  return ($radio == $id ? "checked" : "");
}
?>
<!DOCTYPE html>
</style>
<html lang="fr">
  <head>
    <title>Exercice 23 - Vérifie les contenus</title>
    <link rel="stylesheet" href="includes/styles.css">
    <meta charset="UTF-8">
  </head>
  <body>

    <?php
    $afficher = true;
    if (isset($_POST['envoyer'])) {
      $erreurs = array();
      foreach ($_POST as $name => $value) {
        if ($name == "envoyer") {
          continue;
        }

        if (isset($value) && empty($value)) {
          $erreurs[$name] = true;
        }
      }

      // Vérifier le bouton radio
      if (getPostVariable("note") == "") {
        $erreurs["note"] = true;
      }

      if (count($erreurs)) {
        echo "<div class=\"erreur\"><h4>Erreur dans le formulaire</h4>\n";
        echo "<p>Les champs suivants n'ont pas été remplis : \n";
        foreach ($erreurs as $name => $valeur) {
          echo $name . " ";
        }
        echo "</p><br>\n</div>\n";
      } else {
        $afficher = false;
      }
    }

    if ($afficher) {
      $radio = getPostVariable("note");
      print("<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"POST\">\n");
      print("<label>Nom : </label><input type=\"text\" name=\"nom\" value=\"" . getPostVariable("nom") . "\" size=\"20\" /><br>");
      print("<label>Email : </label><input type=\"text\" name=\"email\" value=\"" . getPostVariable("email") . "\" size=\"20\" /><br>\n");
      print("<label>Note : </label><input type=\"radio\" name=\"note\" value=\"1\" " . isChecked($radio, '1') . ">Insuffisant</input><br>\n");
      print("<label>&nbsp;</label><input type=\"radio\" name=\"note\" value=\"2\" " . isChecked($radio, '2') . ">Suffisant</input><br>\n");
      print("<label>&nbsp;</label><input type=\"radio\" name=\"note\" value=\"3\" " . isChecked($radio, '3') . ">Bien</input><br>\n");
      print("<label>&nbsp;</label><input type=\"radio\" name=\"note\" value=\"4\" " . isChecked($radio, '4') . ">Très bien</input><br>\n");
      print("<label>Message : </label> <textarea name=\"message\" cols=\"20\" rows=\"5\">" . getPostVariable("message") . "</textarea><br>\n");
      print("<input type=\"submit\" name=\"envoyer\" value=\"envoyer\"/>\n");
      print("</form>\n");
    } else {
      echo "<h3> Le formulaire est correctement rempli ... traitement</h3>";
      trace($_POST);
    }
    
    
    ?>
  </body>
</html>
