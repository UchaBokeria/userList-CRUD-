<?php
  include_once "autoClassLoader.php";


  if(!isset($_POST["name"]) || !isset($_POST["surname"]) ||
     !isset($_POST["age"]) || !isset($_POST["sex"])) {}

  else {
    $controller = new Contrl();
    $result = $controller->create($_POST["name"],$_POST["surname"],$_POST["age"],$_POST["sex"]);

  }

?>
