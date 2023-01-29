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
Route::prefix('/blog')->group(function(){
    Route::get('/create', [PostsController::class, 'create'])-> name('blog.create');
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])-> name('blog.show');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destory');
});
//Route::resource('blog', PostsController::class);

//Route for invoke method

Route::get('/', HomeController::class);