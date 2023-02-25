<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublisherController;
use App\Models\article;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::group(["prefix"  => "/article" ], function(){
    Route::get('/allarticle', [ArticleController::class, 'index']);
    Route::get('/detailarticle/{article:tittle}', [ArticleController::class, 'detail']);
    Route::get('/editarticle/{article}', [ArticleController::class, 'edit']);
    Route::post('/update/{article}', [ArticleController::class, 'update']);
    Route::get('/createarticle', [ArticleController::class, 'create']);
    Route::post('/add', [ArticleController::class, 'publish']);
    Route::delete('/delete/{article}', [ArticleController::class, 'delete']);
});

Route::group(["prefix"  => "/publisher" ], function(){
    Route::get('/allpublisher', [PublisherController::class, 'index']);
    Route::get('/detail/{publisher:name_publisher}', [PublisherController::class, 'detail']);
});

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'register_action']) ->name('register.action');

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'login_action']) ->name('login.action');

Route::post('logout', [AuthController::class, 'logout']);

Route::group(["prefix"  => "/dashboard" ], function(){
    Route::get('/', function () {
        return view('dashboard.index');
    })->middleware('auth');

    Route::group(["prefix"  => "/article" ], function(){
        Route::get('/allarticle', [DashboardController::class, 'index'])->name ('allarticle');
        Route::get('/detailarticle/{article:tittle}', [DashboardController::class, 'detail']);
        Route::get('/editarticle/{article:id}', [DashboardController::class, 'edit']);
        Route::post('/update/{article:id}', [DashboardController::class, 'update']);
        Route::get('/createarticle', [DashboardController::class, 'create']);
        Route::post('/add', [DashboardController::class, 'publish']);
        Route::delete('/delete/{article:tittle}', [DashboardController::class, 'delete']);
    });

    Route::group(["prefix"  => "/publisher" ], function(){
        Route::get('/allpublisher', [DashboardController::class, 'index_publisher']);
        Route::get('/detail/{publisher:name_publisher}', [DashboardController::class, 'detail_publisher']);
    });
});