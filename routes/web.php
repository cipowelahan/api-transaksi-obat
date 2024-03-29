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

$router->group(['prefix' => 'barang'], function() use ($router) {
    $router->get('/', 'Barang\Barang@list');
    $router->post('/', 'Barang\Barang@store');
    $router->get('/{id}', 'Barang\Barang@get');
    $router->put('/{id}', 'Barang\Barang@update');
    $router->delete('/{id}', 'Barang\Barang@delete');
});

$router->group(['prefix' => 'transaksi'], function() use ($router) {
    $router->get('/', 'Barang\Transaksi@list');
    $router->post('/', 'Barang\Transaksi@store');
    $router->get('/{id}', 'Barang\Transaksi@get');
    $router->delete('/{id}', 'Barang\Transaksi@delete');
});


$router->group(['prefix' => 'auth'], function() use ($router) {
    $router->post('/login', 'Account@login');

});