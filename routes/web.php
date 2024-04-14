<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\ConfigController;
use App\Http\Controllers\Back\UserController;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ArticleController as FrontArticleController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Middleware;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']);

Route::get('/p/{slug}',[FrontArticleController::class, 'show']);
Route::get('/articles',[FrontArticleController::class, 'index']);
Route::post('/articles/search',[FrontArticleController::class, 'index'])->name('search');

Route::get('category/{slug}', [FrontCategoryController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::resource('article', ArticleController::class);
    
    Route::resource('/categories', CategoryController::class)->only([
        'index', 'store', 'update', 'destroy', 'parent'
    ])->Middleware('UserAccess:1');
    
    Route::resource('/users', UserController::class);
    Route::get('/profile', [UserController::class, 'show']);

    Route::resource('/config', ConfigController::class)->only([
        'index', 'update'
    ]);
    
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
