<?php

use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
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

Route::post('/signup', [
    SignUpController::class ,
    'index'
]);

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signin', [
    SignInController::class ,
    'index'
]);

Route::get('/signin', function () {
    return view('signin');
});


Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('index');
});

