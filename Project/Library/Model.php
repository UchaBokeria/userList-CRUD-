<?php
  class Model extends Dbh{

    protected function get($sql){
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }

    protected function setAll($sql,$params){
      $stmt = $this->connect()->prepare($sql);
      $length = count($params);

      for ($i=0, $j=0; $i < $length; $i++) {
        $j++;
        $stmt->bindParam($j,$params[$i]);
      }
      $stmt->execute();
    }
    
    protected function set($sql,$param){
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(1,$param);
      $stmt->execute();
    }


  }
