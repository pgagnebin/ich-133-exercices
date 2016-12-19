<?php

/*
 * Fonctions sur les dates
 */

function mois_fr($mois) {
  $tableau = array("janvier", "février", "mars", "avril", "mai", "juin",
      "juillet", "août", "septembre", "octobre",
      "novembre", "décembre");
  return $tableau[$mois - 1];
}

function mois_courant() {
  return mois_fr(date("m"));
}

function mois($mois = 0) {
  // Appel sans argument ou $mois = 0
  if ($mois == 0) {
    return mois_courant();
  }
  // Seulement si le mois est valide
  else if ($mois >= 1 && $mois <= 12) {
    return mois_fr($mois);
  } 
  // Mois non valide
  else {
    return "mois N°" . $mois . " est inconnu :-(";
  }
}
