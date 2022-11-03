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

Route::prefix('bs')->group(function(){

    
    Route::get('/signin', function () {
        return view('bs.signin');
    });
   
});

Route::prefix('ap')->group(function(){
    
    Route::post('/signup', [
        SignUpController::class ,
        'index'
    ]);
    
    Route::get('/signup', function () {
        return view('ap.signup');
    });
    
    Route::post('/signin', [
        SignInController::class ,
        'index'
    ]);
    
    Route::get('/signin', function () {
        return view('ap.signin');
    });
    
    Route::get('/', function () {
        return view('ap.index');
    });
     
});

Route::get('/', function () {
    return view('ap.index');
});
 