<?php

use App\Http\Controllers\ManageRecruitmentController;
use App\Http\Controllers\PostRecruitmentController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SubmittedController;
use App\Http\Controllers\ViewCensorshipController;
use App\Http\Controllers\ViewDetailController;
use App\Http\Controllers\ViewHomeController;
use App\Http\Controllers\ViewSubmittedController;
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

    Route::post('/postRecruitment', [
        PostRecruitmentController::class,
        'postRecruitment'
    ]);

    Route::get('/create-new-job', [
        PostRecruitmentController::class,
        'viewPostRecruitment'
    ])->name('postRecruitment');

    Route::get('/manage-recruitment', [
        ManageRecruitmentController::class,
        'viewManageRecruitment'
    ])->name('mangageRecruitment');
    
    Route::get('/view-censorship/{id}', [
        ViewCensorshipController::class,
        'viewCensorship'
    ])->name('viewCensorship');

    Route::get('/view-censorshipped/{id}', [
        ViewCensorshipController::class,
        'viewCensorshipped'
    ])->name('viewCensorshipped');
    
    Route::get('/censorship-yes/{id}', [
        ViewCensorshipController::class,
        'censorshipYes'
    ]);

    Route::get('/censorship-no/{id}', [
        ViewCensorshipController::class,
        'censorshipNo'
    ]);

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




});

Route::prefix('ap')->name('ap.')->group(function () {

    
    Route::get('/submitted/delete/{id}', [
        ViewSubmittedController::class,
        'delete'
    ])->name('delete');

    Route::post('/submitted/edit/', [
        ViewSubmittedController::class,
        'edit'
    ]);

    Route::get('/submitted', [
        ViewSubmittedController::class,
        'index'
    ])->name('submitted');

    Route::post('/submitted', [
        SubmittedController::class,
        'index'
    ]);


    Route::get('/detail-job/{id}', [
        ViewDetailController::class,
        'index'
    ])->name('detail-job');

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

    Route::get('/', [
        ViewHomeController::class,
        'index'
    ])->name('index');
    
    
});

Route::get('/', [
    ViewHomeController::class,
    'index'
]);
