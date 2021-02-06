<?php
  class Contrl extends Model{
    use Checker;

    public function create($name,$surname,$age,$sex){
      if($this->check($name,$surname,$age,$sex) == false)
        return false;

      $sql = "INSERT INTO person(name,surname,age,sex_id) VALUES(?,?,?,?);";
      
      $params = array($name,$surname,$age,$sex);
      $this->setAll($sql,$params);
      return true;
    }

    public function update($name,$surname,$age,$sex,$id){
      if($this->check($name,$surname,$age,$sex) == false)
        return false;

      $sql = "UPDATE person
              SET name=?,surname=?,age=?,sex_id=?
              WHERE id=?;";

      $params = array($name,$surname,$age,$sex,$id);
      $this->setAll($sql,$params);
      return true;
    }

    public function delete($id){
      $sql = "DELETE FROM person WHERE id = ?;";
      $this->set($sql,$id);
    }

    // checks validation of inputs
    protected function check($name,$surname,$age,$sex){
      if(!$this->nameCheck($name))
        return false;

      if(!$this->nameCheck($surname))
        return false;

      if(!$this->ageCheck($age))
        return false;

      if($sex>2)
        return false;

      return true;
    }
  }
