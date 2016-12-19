<?php
require("../includes/helper.inc.php");

function select_jour($nom, $defaut = 0) {
  $field = "<select name=\"" . $nom . "\">\n";

  for ($i = 1; $i <= 31; $i++) {
    $selected = $i == $defaut ? " selected" : "";
    $field .= "<option " . $selected . ">" . $i . "</option>\n";
  }
  $field .= "</select>\n";
  return $field;
}

function select_mois($nom, $defaut = 0) {
  $field = "<select name=\"" . $nom . "\">\n";

  $mois = array("janvier", "février", "mars", "avril", "mai", "juin",
      "juillet", "août", "septembre", "octobre",
      "novembre", "décembre");

  for ($i = 1; $i <=count($mois); $i++) {
    $selected = $i == $defaut ? " selected" : "";
    $field .= "<option " . $selected . ">" . $mois[$i-1]. "</option>\n";
  }
  $field .= "</select>\n";
  return $field;
}

function select_annee($nom, $annee_debut, $annee_fin, $defaut = 0) {
  $field = "<select name=\"" . $nom . "\">\n";

  if ($annee_fin < $annee_debut) {
    exchange_data($annee_debut, $annee_fin);
  }

  for ($i = $annee_debut; $i <= $annee_fin; $i++) {
    $selected = $i == $defaut ? " selected" : "";
    $field .= "<option " . $selected . ">" . $i . "</option>\n";
  }
  $field .= "</select>\n";
  return $field;
}

function select_date($annee_debut, $annee_fin) {
  
}

?>
<!DOCTYPE html>
</style>
<html lang="fr">
  <head>
    <title>Exercice 42 - Dènère une demande de date (jour-mois-année)</title>
    <link rel="stylesheet" href="../includes/styles.css">
    <meta charset="UTF-8">
  </head>
  <body>

    <?php
    if (isset($_POST['envoyer'])) {
      trace($_POST);
    } else {
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Année 1 </label><?php echo select_annee("annee1", 1976, 2036, 2016); ?><br>
        <label>Année 2 </label><?php echo select_annee("annee2", 2010, 2020); ?><br>
        <label>Année 3 </label><?php echo select_annee("annee3", 2000, 1990); ?><br>
        <input type="submit" name="envoyer" value="envoyer"/>
      </form>
      <?php
    }
    ?>

  </body>
</html>
