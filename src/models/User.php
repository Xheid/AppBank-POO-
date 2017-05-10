<?php


class User extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "users";

  public function isUser($email, $password){
    $query = $this->dbConnection->from($this->table_name)
      ->select('email, password')
      ->where(array("email" => $email, "password" => $password))
      ->limit(1);
    return $query->fetch();
  }

    public function findOneByEmail($email){
    $query = $this->dbConnection->from($this->table_name)->where("email", $email);
    return $query->fetch();
    }
}
