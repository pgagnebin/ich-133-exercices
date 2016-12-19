<?php
require("./includes/helper.inc.php");
?>
<!DOCTYPE html>
</style>
<html lang="fr">
  <head>
    <title>Exercice 21 - Appel de la même page</title>
    <link rel="stylesheet" href="includes/styles.css">
    <meta charset="UTF-8">
  </head>
  <body>

    <?php
    if (isset($_POST['envoyer'])) {
      trace($_POST);
    } else {
      ?>
    
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        
        <label>Nom : </label><input type="text" name="nom" value="" size="20" /><br>
        <label>Email : </label><input type="text" name="email" value="" size="20" /><br>
        <label>Note : </label><input type="radio" name="note" value="1">Insuffisant</input><br>
        <label>&nbsp;</label><input type="radio" name="note" value="2">Suffisant</input><br>
        <label>&nbsp;</label><input type="radio" name="note" value="3">Bien</input><br>
        <label>&nbsp;</label><input type="radio" name="note" value="4">Très bien</input><br>
        <label>Message : </label> <textarea name="message" cols="20" rows="5">Contenu</textarea><br>
        <input type="submit" name="envoyer" value="envoyer"/>
      </form>
      <?php
    }
    ?>
    
  </body>
</html>
