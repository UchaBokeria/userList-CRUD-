<?php
  class Dbh{
    private $DBhost = "localhost";
    private $DBuser = "root";
    private $DBpwd = "";
    private $DBname = "test2";

    protected function connect(){
      $connection = null;
      try {
        $connection = new PDO("mysql:host=" . $this->DBhost . ";dbname=" . $this->DBname , $this->DBuser, $this->DBpwd);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
        $connection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

      } catch (PDOExeption $e) {
        echo "<br><br> ... something went wrong : " . $e. "<br><br>";
      }

      return $connection;
    }
  }
