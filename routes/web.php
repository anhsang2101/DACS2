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

    Route::post('/signin', [
        SignInController::class ,
        'signInBs'
    ]);
    Route::get('/signin', function () {
        return view('bs.signin');
    });
    Route::post('/signup', [
        SignUpController::class ,
        'signUpBs'
    ]);
    Route::get('/signup', function () {
        return view('bs.signup');
    });
    Route::get('/', function () {
        return view('bs.index');
    });
    Route::get('/create-new-job', function () {
        return view('bs.create-new-job');
    });
    Route::get('/manage-recruitment', function () {
        return view('bs.manage-recruitment');
    });
});

Route::prefix('ap')->name('ap.')->group(function(){
    
    Route::post('/signup', [
        SignUpController::class ,
        'signUpAp'
    ]);
    
    Route::get('/signup', function () {
        return view('ap.signup');
    })->name('signup');
    
    Route::post('/signin', [
        SignInController::class ,
        'signInAp'
    ]);
    
    Route::get('/signin', function () {
        return view('ap.signin');
    })->name('signin');
    
    Route::get('/', function () {
        return view('ap.index');
    })->name('index');
     
});

Route::get('/', function () {
    return view('ap.index');
});
 