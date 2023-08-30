<?php

namespace Jonathan\Crud\models;

use Jonathan\Crud\models\Connection;

class QueryExecutor
{
  private $connection;

  public function __construct(Connection $connection)
  {
    $this->connection = $connection->getConnection();
  }

  public function executeQuery(String $query, array $param = [])
  {
    try {
      $stmt = $this->connection->prepare($query);
      $stmt->execute($param);
      return $stmt;
    } catch (\Exception $e) {
      throw new \Exception($e->getMessage(), 1);
    }
  }
}
