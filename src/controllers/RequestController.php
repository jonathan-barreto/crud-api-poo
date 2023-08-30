<?php

namespace Jonathan\Crud\controllers;

use Jonathan\Crud\models\Create;
use Jonathan\Crud\models\Read;
use Jonathan\Crud\models\Update;
use Jonathan\Crud\models\Delete;
use Jonathan\Crud\models\ArrayToJson;

class RequestController
{
  public function returnData($requestMethod)
  {
    if ($requestMethod == "GET") {
      $read = new Read();
      return ArrayToJson::dataSuccess($read->readUsers());
    }

    if ($requestMethod == "POST") {
      $data = json_decode(file_get_contents('php://input'), 1);
      $create = new Create();
      $create->createUser($data);
      return ArrayToJson::messageSuccess("User criado com sucesso.");
    }

    if ($requestMethod == "PUT") {
      $url = explode("/",  $_REQUEST["request"]);
      $className = "Jonathan\Crud\models\\" . ucfirst($url[0]);
      if (class_exists($className)) {
        $id = $url[1];
        $data = json_decode(file_get_contents('php://input'), 1);
        $update = new Update();
        $update->updateUser($data, $id);
        return ArrayToJson::messageSuccess("User atualizado com sucesso.");
      } else {
        return ArrayToJson::messageError("Classe inexistente.");
      }
    }

    if ($requestMethod == "DELETE") {
      $url = explode("/",  $_REQUEST["request"]);
      $className = "Jonathan\Crud\models\\" . ucfirst($url[0]);
      if (class_exists($className)) {
        $id = $url[1];
        $deleteUser = new Delete();
        $deleteUser->deleteUser($id);
        return ArrayToJson::messageSuccess("User deletado com sucesso.");
      } else {
        return ArrayToJson::messageError("Classe inexistente.");
      }
    }
  }
}
