<?php

namespace Jonathan\Crud\models;

use Jonathan\Crud\models\Connection;
use Jonathan\Crud\models\QueryExecutor;

class Create
{
  public function createUser(array $data)
  {
    try {
      $connection = new Connection();
      $queryExecutor = new QueryExecutor($connection);

      $query = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
      $param = [
        ":nome" => $data["nome"],
        ":email" => $data["email"],
      ];

      $queryExecutor->executeQuery($query, $param);
    } catch (\Exception $e) {
      throw new \Exception($e->getMessage(), 1);
    }
  }
}
