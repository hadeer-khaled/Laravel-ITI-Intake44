<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//     3- create --> return view contains form 00> used in create
//     4- edit ---> return view contains edit form --> display post info
//     5- destroy --> ask me are you want to delete post
//  to construct these routes

// get: /posts/create ==> 
// get:  /posts/id/edit ===> edit page
// delete: /posts/id ===> delete page

Route::get('/', function () {
    return view('welcome');
});

  
use App\Http\Controllers\PostController;

Route::get("/posts",[PostController::class,'index'] )->name('post.index');

Route::get("/posts/{id}",[PostController::class,'show'] )->name('post.show')->where('id', '[0-9]+');

