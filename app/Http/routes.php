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

$app->get('/', function () use ($app) {
    return;
});

$app->get('cars','CarController@index');

$app->get('cars/{id}','CarController@show');

$app->get('cars/search/{qry}','CarController@search');

$app->get('cars/browse/{limit}','CarController@browse');
