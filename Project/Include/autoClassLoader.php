<?php
  spl_autoload_register("loader");
  function loader($classname){
    $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

    if(strpos($url,"Include"))
      $path = "../Library/" . $classname . ".php";
    else
      $path = "Library/" . $classname . ".php";

    if(!file_exists($path)){
      echo "<br><br> !! class <b> " . $classname . " </b> does not exist !!<br><br>";
      return;
    }

    include $path;
  }
