<?php
  class View extends Model{
    public function read(){
      $sql = "SELECT person.id,person.name,person.surname,person.age,person.sex_id,sex.name
              as sex FROM person  JOIN sex on sex.id=person.sex_id;";
      return $this->get($sql);
    }
  }
