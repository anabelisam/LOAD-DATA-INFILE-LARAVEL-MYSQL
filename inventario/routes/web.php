<?php

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
Route::get('/listProducts', 'ProductController@listProducts');

Route::get('/csv', function (){  
    $path = public_path('archivo.csv');
    dispatch(new \App\Jobs\ImportCsv($path));
});
