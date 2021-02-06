<?php
  include_once "autoClassLoader.php";

  if(!isset($_POST["name"]) || !isset($_POST["surname"]) || !isset($_POST["age"]) || !isset($_POST["sex"]) || !isset($_POST["id"])){}
  else {
    $controller = new Contrl();
    $controller->update($_POST["name"],$_POST["surname"],$_POST["age"],$_POST["sex"],$_POST["id"]);
  }

?>
