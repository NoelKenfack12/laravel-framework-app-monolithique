<?php

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

Route::get('/', function () {
    return ['un', 'deux', 'trois'];
    return view('welcome');
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

Route::get('article/{n}', function($n){
    return view('detailarticle')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('articles', function(){
    return view('articles');
});
    
