<?php

namespace Jonathan\Crud\models;

use Jonathan\Crud\models\Connection;
use Jonathan\Crud\models\QueryExecutor;

class Read
{
  public static function readUsers()
  {
    try {
      $connection = new Connection();
      $queryExecutor = new QueryExecutor($connection);

      $query = "SELECT * FROM usuarios";

      $result = $queryExecutor->executeQuery($query);
      return $result->fetchAll(\PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
      throw new \Exception($e->getMessage(), 1);
    }
  }
}
