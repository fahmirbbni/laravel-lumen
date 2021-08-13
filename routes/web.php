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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//router untuk diuji di postman

$router->get('/todo', 'todoController@index'); 
$router->get('/todo/{id}', 'todoController@show');
$router->post('/todo/save', 'todoController@store');
$router->post('/todo/{id}/update', 'todoController@update');
$router->post('/todo/{id}/delete', 'todoController@destroy');

