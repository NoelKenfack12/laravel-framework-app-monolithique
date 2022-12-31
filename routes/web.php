<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;
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
    //return ['un', 'deux', 'trois'];
    return view('welcome1');
});
Route::get('noel/{n}', function($n){
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');

Route::get('test', function () {
    return response('un test', 206)->header('Content-Type', 'text/plain');
});

Route::get('firstview', function(){
    return view('firstview');
});

Route::get('index', [WelcomeController::class, 'index'])->name('home');

Route::get('/articles', [ArticleController::class, 'articles'])->name('list_articles');

Route::get('article/{n}', [ArticleController::class, 'detailarticle'])
        ->name('detailarticle_article')
        ->where('n', '[0-9]+');

Route::get('users', [UserController::class, 'create']);
Route::post('users', [UserController::class, 'store']);

Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('photo', [PhotoController::class, 'create']);
Route::post('photo', [PhotoController::class, 'store']);


    
