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
$router->get('/content','Addons\GatherController@get_content');
$router->get('/reward','General\ApiController@reward');
$router->get('/titleList','General\ApiController@getGameTitle');
$router->post('/content','General\GatherController@Content');
$router->post('/setoss','General\ApiController@OssSet');
$router->post('/upload','General\ApiController@uploadToOss');
$router->get('/test','General\UserController@test');
$router->post('/adminLogin','Admin\AdminController@login');
$router->post('/getGather','Addons\GatherController@get_content');
$router->post('/gatherList','Addons\GatherController@getListRule');
$router->post('/gatherContent','Addons\GatherController@getContentRule');
$router->post('/getRule','Addons\GatherController@getRule');
$router->post('/editRule','Addons\GatherController@editRule');
$router->post('/ruleSet','Addons\GatherController@ruleSet');
$router->post('/gatherType','Addons\GatherController@gatherType');
$router->post('/getContents','Addons\GatherController@getContents');
$router->post('/createUser','Admin\PublicController@createUser');
$router->get('/admin/getRules','Admin\AdminController@getRules');