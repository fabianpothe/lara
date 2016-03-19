<?php
header('Content-Type: text/css');
require_once 'assets/scssphp/scss.inc.php';
/*  $directory = "scss";
  scss_server::serveFrom($directory);*/
  $scss = new scssc();
$scss->setFormatter("scss_formatter_compressed");

$server = new scss_server("assets/scss", null, $scss);
$server->serve();
?>
