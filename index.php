<?php
$exclude_files = array(".", "includes", "nbproject");

$files = scandir("./", 0);
foreach ($files as $file) {
  $file = strtolower($file);
  if (is_dir($file)) {
    $key = array_search($file, $exclude_files);
    if ($key === false) {
      if (strcmp($file, "..") === 0) {
        printf("<a href=" . $file . "> .. </a><br>\n");
      } else {
        printf("<a href=" . $file . ">" . $file . "</a><br>\n");
      }
    }
  } else {
    $pos = stripos($file, ".php");
    if ($pos > 0 && strcmp($file, "index.php") !== 0) {
      printf("<a href=" . $file . " target=\"_blank\">" . $file . "</a><br>\n");
    }
  }
}