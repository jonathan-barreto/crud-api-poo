<?php

require_once 'vendor/autoload.php';

header("Content-type: application/json; charset=utf-8");

use Jonathan\Crud\controllers\RequestController;

$requestMethod = $_SERVER["REQUEST_METHOD"];

$requestController = new RequestController();
echo $requestController->returnData($requestMethod);
