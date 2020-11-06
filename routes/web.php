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

$router->get('/books', 'BooksController@index');
$router->get('/books/{id}', 'BooksController@show');
$router->post('/books', 'BooksController@store');
$router->put('/books/{id}', 'BooksController@update');
$router->delete('/books/{id}', 'BooksController@destroy');

$router->get('/authors', 'AuthorsController@index');
$router->get('/authors/{id}', 'AuthorsController@show');
$router->post('/authors', 'AuthorsController@store');
$router->put('/authors/{id}', 'AuthorsController@update');
$router->delete('/authors/{id}', 'AuthorsController@destroy');
