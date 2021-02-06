<?php
  trait Checker{
    public function nameCheck($param){
      if(strlen($param) > 222)
        return false;

      return is_string($param) ? true : false;
    }

    public function ageCheck($param){
      return is_numeric($param) ? true : false;
    }

  }
