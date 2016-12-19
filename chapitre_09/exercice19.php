<!DOCTYPE html>
<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding : 4px;
  }
</style>
<html lang="fr">
  <head>
    <title>Exercice 19 - Variables d'environnement</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
    $infos = array("REMOTE_ADDR" => "Adresse IP du client",
        "HTTP_USER_AGENT" => "Navigateur utilisé",
        "SCRIPT_NAME" => "Nom du script",
        "SERVER_NAME" => "Adresse IP du serveur",
        "SERVER_ADDR" => "Nom du serveur",
        "CONTEXT_DOCUMENT_ROOT" => "Racine des documents du serveur",
        "SERVER_SOFTWARE" => "Type de serveur web");

    echo "<table>\n";
    echo "<thead>\n";
    echo "<tr>\n";
    echo "<th  width=300px>Information</th>\n";
    echo "<th>Contenu</th>\n";
    echo "</tr>\n";
    echo "</thead>\n";
    echo "<tbody>\n";
    foreach ($infos AS $key => $value) {
      echo "<tr>\n";
      echo "<td>" . $value . "</td>\n";
      echo "<td>" . $_SERVER[$key] . "</td>\n";
      echo "</tr>\n";
    }
    echo "</tbody>\n";
    echo "</table>\n";
    ?>
  </body>
</html>

