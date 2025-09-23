<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\AppController;



Route::resource('products', ProductController::class);

Route::get('/', [AppController::class, 'index'])->name('app.home');

Route::get('/product/{slug}', [AppController::class, 'details'])->name('app.product-details');




/*
Route::get('/', [ProductController::class, 'index']);
Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
    Route::get('/', [ProductController::class, 'all'])->name('all');
    Route::get('{id?}', [ProductController::class, 'byId'])->name('byId');
});
*/

/*
Route::group([
    'prefix' => 'routing',
    'as' => 'method.'
], function () {
    // "Any" method is used when any http method will be accepted (get, post, put...)
    Route::any('any-method', function () {
        return '<h1>"Any" method is used when any http method will be accepted (get, post, put...)</h1>';
    })->name('any');

    // "Match" method is used when only some http methods will be accepted (get, post, put...)
    Route::match(['get', 'post'], 'match-method', function () {
        return '<h1>The “Match” method is used when only certain HTTP methods will be accepted (GET, POST, PUT, etc.).</h1>';
    })->name('match');
});


Route::get('/params/{id?}', function ($id = '') {
    return "<h2>Routing with param, id from params $id </h2>";
});
*/