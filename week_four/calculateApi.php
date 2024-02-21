<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ],
]);

$app->post('/add' , function (Request $request,Response $response,$args){
    $data=$request->getParsedBody();
    $calculateObject = new \App\controllers\CalculateController();
    $result = $calculateObject->add($data["numOne"],$data["numTwo"]);
    return $response->withJson($result);
});

$app->post('/sub',function (Request $request,Response $response,$args){
    $data=$request->getParsedBody();
    $calculateObject = new \App\controllers\CalculateController();
    $result = $calculateObject->subtract($data["numOne"],$data["numTwo"]);
    return $response->withJson($result);
});

$app->post('/mul',function (Request $request,Response $response,$args){
    $data = $request->getParsedBody();
    $calculateObject = new \App\controllers\CalculateController();
    $result = $calculateObject->multiplication($data["numOne"],$data["numTwo"]);
    return $response->withJson($result);
});

$app->post('/div' ,function (Request $request,Response $response,$args){
    $data = $request->getParsedBody();
    $calculateObject = new \App\controllers\CalculateController();
    $result = $calculateObject->division($data["numOne"],$data["numTwo"]);
    return $response->withJson($result);
});

$app->post('/rem',function (Request $request,Response $response,$args){
    $data = $request->getParsedBody();
    $calculateObject = new \App\controllers\CalculateController();
    $result = $calculateObject->reminder($data["numOne"],$data["numTwo"]);
    return $response->withJson($result);
});

$app->run();
