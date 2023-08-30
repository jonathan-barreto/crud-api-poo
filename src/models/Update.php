<?php

namespace Jonathan\Crud\models;

use Jonathan\Crud\models\Connection;
use Jonathan\Crud\models\QueryExecutor;

class Update
{
  public function updateUser(array $data, int $id)
  {
    try {
      $connection = new Connection();
      $queryExecutor = new QueryExecutor($connection);

      $query = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
      $param = [
        ":nome" => $data["nome"],
        ":email" => $data["email"],
        ":id" => $id,
      ];

      $queryExecutor->executeQuery($query, $param);
    } catch (\Exception $e) {
      throw new \Exception($e->getMessage(), 1);
    }
  }
}
