<?php

namespace Jonathan\Crud\models;

use Jonathan\Crud\models\Connection;
use Jonathan\Crud\models\QueryExecutor;

class Delete
{
  public function deleteUser(int $id)
  {
    $connection = new Connection();
    $queryExecutor = new QueryExecutor($connection);

    $query = "DELETE FROM usuarios WHERE id = :id";
    $param = [
      ":id" => $id,
    ];

    $queryExecutor->executeQuery($query, $param);
    return "deletado";
  }
}
