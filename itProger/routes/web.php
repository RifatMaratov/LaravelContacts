<?php

use App\Http\Controllers\MainController;
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


Route::get('/', [MainController::class, 'home']);

Route::resources('reviews', MainController::class);

//Route::get('/about',[MainController::class, 'about']);
//Route::get('/review',[MainController::class, 'review'])->name('review');
//Route::post('/review/check',[MainController::class, 'review_check']);



//Route::get('/user/{id}/{name}', function ($id,$name) {
 //   return 'ID: '.$id.'. Name: '.$name;
//});

//Route::get('/review','MainController@review');
//Route::get('/','MainController@home');
