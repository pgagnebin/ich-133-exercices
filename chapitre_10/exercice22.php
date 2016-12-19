<?php
require("./includes/helper.inc.php");

function getPostVariable($id, $default = "") {
  if (isset($_POST[$id]))
    return $_POST[$id];
  else 
    return $default;
}

?>
<!DOCTYPE html>
</style>
<html lang="fr">
  <head>
    <title>Exercice 22 - Vérifie les contenus</title>
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
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Nom : </label><input type="text" name="nom" value="" size="20" /><br>
        <label>Email : </label><input type="text" name="email" value="" size="20" /><br>
        <label>Note : </label><input type="radio" name="note" value="1">Insuffisant</input><br>
        <label>&nbsp;</label><input type="radio" name="note" value="2">Suffisant</input><br>
        <label>&nbsp;</label><input type="radio" name="note" value="3">Bien</input><br>
        <label>&nbsp;</label><input type="radio" name="note" value="4">Très bien</input><br>
        <label>Message : </label> <textarea name="message" cols="20" rows="5"></textarea><br>
        <input type="submit" name="envoyer" value="envoyer"/>
      </form>
      <?php
    }
    ?>
    
    
  </body>
</html>
