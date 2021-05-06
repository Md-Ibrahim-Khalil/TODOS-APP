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

use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('todos', 'TodosController@index');

Route::get('todos/{todo}', 'TodosController@show');
// Create new todos 
Route::get('new-todos', 'TodosController@create');
// Store Data
Route::post('store-todos', 'TodosController@store');
// Edit Data
Route::get('todos/{todo}/edit', 'TodosController@edit');

Route::post('todos/{todo}/update-todos', 'TodosController@update');

Route::get('todos/{todo}/delete', 'TodosController@destroy');

Route::get('todos/{todo}/complete', 'TodosController@complete');

