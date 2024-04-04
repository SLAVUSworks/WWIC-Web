<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\UserController;





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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::resource('article', ArticleController::class);
    
    Route::resource('/categories', CategoryController::class)->only([
        'index', 'store', 'update', 'destroy'
    ]);
    
    Route::resource('/users', UserController::class);
    
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
