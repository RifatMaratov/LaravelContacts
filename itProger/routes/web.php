<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return redirect()->route('reviews.index');
});

Route::get('/about',[MainController::class, 'review'])->name('reviews.about');

Route::resources(['reviews' => MainController::class]);

Route::group(['prefix' => 'auth'], function () {
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::get('login', [AuthController::class, 'auth'])->name('auth');
    Route::post('user/create', [AuthController::class, 'create'])->name('user.create');
    Route::post('signin', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});



//Route::get('/about',[MainController::class, 'about']);
//Route::get('/review',[MainController::class, 'review'])->name('review');
//Route::post('/review/check',[MainController::class, 'review_check']);



//Route::get('/user/{id}/{name}', function ($id,$name) {
 //   return 'ID: '.$id.'. Name: '.$name;
//});

//Route::get('/review','MainController@review');
//Route::get('/','MainController@home');
