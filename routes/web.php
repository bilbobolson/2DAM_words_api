<?php

/**
 * Antonio José Sánchez Bujaldón
 * Programación de Aplicaciones Multimedia y de Dispositivos Móviles
 * curso 2021|22
 */

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

$router->get('key', function() {
    return Illuminate\Support\Str::random(32) ;
}) ;

$router->get('palabra',     ['uses' => 'PalabraController@palabra']) ;
$router->get('reset',       ['uses' => 'PalabraController@reset']) ;
$router->get('usada/{id}',  ['uses' => 'PalabraController@usada']) ;


