<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/test', function () use ($router) {
    return $router->app->version();
});

$router->get('/', function () use ($router) {
    return view('home', ['version' => $router->app->version()]);
});

$router->get('/users', function () use ($router) {
    $controller = new App\Http\Controllers\ExampleController();
    $users = $controller->getAllUsers();
});