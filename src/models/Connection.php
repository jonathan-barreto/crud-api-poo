<?php

namespace Jonathan\Crud\models;

class Connection
{
  public function getConnection()
  {
    $dns = "mysql:host=localhost;dbname=usuario";
    $username = "root";
    $password = "";

    try {
      $pdo = new \PDO($dns, $username, $password);
      $pdo->setAttribute(\PDO::ERRMODE_EXCEPTION, \PDO::ATTR_ERRMODE);
      return $pdo;
    } catch (\PDOException $e) {
      throw new \Exception($e->getMessage(), 1);
    }
  }
}
