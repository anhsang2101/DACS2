<?php

use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;
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

Route::prefix('bs')->name('bs.')->group(function () {

    Route::get('/signout', [
        SignOutController::class,
        'signOutBs'
    ]);
    Route::get('/create-new-job', function () {
        return view('bs.create-new-job');
    });
    Route::get('/manage-recruitment', function () {
        return view('bs.manage-recruitment');
    });
    Route::post('/signin', [
        SignInController::class,
        'signInBs'
    ]);
    Route::get('/signin', function () {
        return view('bs.signin');
    })->name('signin');
    Route::post('/signup', [
        SignUpController::class,
        'signUpBs'
    ]);
    Route::get('/signup', function () {
        return view('bs.signup');
    })->name('signup');
    Route::get('/', function () {
        return view('bs.index');
    })->name('index');
    Route::get('/create-new-job', function () {
        return view('bs.create-new-job');
    });
    Route::get('/manage-recruitment', function () {
        return view('bs.manage-recruitment');
    });
});

Route::prefix('ap')->name('ap.')->group(function () {

    Route::get('/signout', [
        SignOutController::class,
        'signOutAp'
    ]);

    Route::post('/signup', [
        SignUpController::class,
        'signUpAp'
    ]);

    Route::get('/signup', function () {
        return view('ap.signup');
    })->name('signup');

    Route::post('/signin', [
        SignInController::class,
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
