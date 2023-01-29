<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
    GET - REQUEST A RESOURCE
    POST - CREATE A NEW RESOURCE
    PUT -  UPDATE A RESOURCE
    PATCH - MODIFY A RESOURCE
    DELETE - DELETE A RESOURCE
    OPTIONS - ASK SERVER WHICH VERBS ARE ALLOWED
|
*/

//GET

Route::get('/blog', [PostsController::class, 'index']);
//Route::get('/blog/{id}', [PostsController::class, 'show'])-> where('id', '[0-9]+');
Route::get('/blog/{name}', [PostsController::class, 'show'])-> where('name', '[A-Za-z]+');

//POST

Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'shore']);


//PUT OR PATCH


Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::patch('/blog/{id}', [PostsController::class, 'update']);

//DELETE

Route::delete('/blog/{id}', [PostsController::class, 'destroy']);


//Multiple HTTP VERBS

Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
Route::any('/blog', [PostsController::class, 'index']);

//Route::resource('blog', PostsController::class);

//Route for invoke method

Route::get('/', HomeController::class);