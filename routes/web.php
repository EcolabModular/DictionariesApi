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

$router->get('/dictionaries','DictionaryController@index');
$router->post('/dictionaries','DictionaryController@store');
$router->get('/dictionaries/{dictionary}','DictionaryController@show');
$router->put('/dictionaries/{dictionary}','DictionaryController@update');
$router->patch('/dictionaries/{dictionary}','DictionaryController@update');
$router->delete('/dictionaries/{dictionary}','DictionaryController@destroy');
