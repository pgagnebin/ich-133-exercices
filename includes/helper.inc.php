<?php

// Cette fonction permet d'afficher le contenu d'une variable ou d'un tableau
function trace($var, $nom = null) {
  if ($nom) {
    echo $nom . " : ";
  }
  if (is_array($var)) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
  } else {
    echo $var . "<br/>\n";
  }
}