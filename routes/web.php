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

$router->get('/',  ['uses' => 'APIController@giveHint']);
$router->get('hello/{name}',  ['as' => 'sayHello', 'uses' => 'APIController@sayHello']);
$router->get('histogram/{name}',  ['uses' => 'APIController@showHistogram']);