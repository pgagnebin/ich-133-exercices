<?php
require("../includes/helper.inc.php");

function select_jour($nom, $defaut = 0){
  $field = "<select name=\"".$nom."\">\n";
  
  for ($i=1; $i<=31; $i++) {
    $selected = $i == $defaut ? " selected" : "";
    $field .= "<option ".$selected.">".$i."</option>\n";
  }
  $field .= "</select>\n";
  return $field;
}

?>
<!DOCTYPE html>
</style>
<html lang="fr">
  <head>
    <title>Exercice 41 - Génère une liste déroulante avec les années</title>
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
        <label>Novembre</label><?php echo select_jour("novembre"); ?><br>
        <label>Décembre</label><?php echo select_jour("decembre", 25); ?><br>        
        <input type="submit" name="envoyer" value="envoyer"/>
      </form>
      <?php
    }
    ?>
    
  </body>
</html>
