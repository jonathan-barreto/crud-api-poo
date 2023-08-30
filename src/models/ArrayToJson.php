<?php

namespace Jonathan\Crud\models;

class ArrayToJson
{
  public static function dataSuccess(array $usersData)
  {
    $data = array(
      "status" => "success",
      "data" => $usersData,
    );
    return json_encode($data);
  }

  public static function messageSuccess(String $message)
  {
    $data = array(
      "status" => "success",
      "message" => $message,
    );
    return json_encode($data);
  }

  public static function messageError(String $message)
  {
    $data = array(
      "status" => "error",
      "message" => $message,
    );
    return json_encode($data);
  }
}
