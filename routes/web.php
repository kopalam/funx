<?php

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

//$router->get('/key', function() {
//    return str_random(32);
//});

$router->get('/test','General\ApiController@test');
$router->get('/content','General\ApiController@getContent');
$router->get('/reward','General\ApiController@reward');
$router->get('/titleList','General\ApiController@getGameTitle');
$router->post('/content','General\GatherController@Content');
$router->post('/setoss','General\ApiController@OssSet');
$router->post('/upload','General\ApiController@uploadToOss');
$router->get('/test','General\ApiController@test');
