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
    return view('welcome');
});

Route::get('/book', 'App\Http\Controllers\BookController.php@index');
Route::get('/book/create', 'App\Http\Controllers\BookController.php@create');
Route::get('/book/edit', 'App\Http\Controllers\BookController.php@edit');
Route::get('/book/update', 'App\Http\Controllers\BookController.php@update');
Route::get('/book/delete', 'App\Http\Controllers\BookController.php@index');

Route::get('/', [ItemController::class, 'index']);
Route::get('/index2', 'App\Http\Controllers\ItemController@index2');
Route::get('/item/form', 'App\Http\Controllers\ItemController@itemForm');
Route::post('/item/post', 'App\Http\Controllers\ItemController@itemPost');
Route::get('/item/{itemName}', 'App\Http\Controllers\ItemController@item');

