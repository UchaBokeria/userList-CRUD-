<?php
  include_once "autoClassLoader.php";

  if(!isset($_GET["id"])){}
  else {
    $controller = new Contrl();
    $controller->delete($_GET["id"]);
  }

?>
