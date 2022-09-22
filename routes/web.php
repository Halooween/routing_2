<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/user/{name}', 'show');
});

Route::controller(UserController::class)->group(function(){
    Route::resource('blog', UserController::class);
});

Route::controller(CategoryController::class)->group(function(){
    Route::resource('category', CategoryController::class);
});

Route::group([ 'prefix'=>'product'], function() { 
    Route::resource('post', CategoryController::class);
    
});
