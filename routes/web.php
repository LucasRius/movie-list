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

Route::group([
    'midleware' => [],    
], function(){
    Route::name('site.')->group(function(){
        Route::get('/', function () {
            return view('site.home');
        })->name('home');
        
        Route::get('/movieList', function () {
            return view('site.list');
        })->name('list');
        
        Route::get('/movie/{id?}', function () {
            return view('site.movie');
        })->name('movie');
    });    
});
