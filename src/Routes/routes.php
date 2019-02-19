<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

//$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
//    // Sample log message
//    $this->logger->info("Slim-Skeleton '/' route");
//
//    // Render index view
//    return $this->renderer->render($response, 'index.phtml', $args);
//});

//$app->get('/home', 'HomeController:index');
$app->get('/', 'HomeController:index');

$app->get('/api', 'ApiController:index');

$app->get('/docs', function (Request $request, Response $response, $args) {
    $swagger = \OpenApi\scan(__DIR__ . '/../Controllers');

    header('Content-Type: application/json');

    return $swagger->toJson();
});