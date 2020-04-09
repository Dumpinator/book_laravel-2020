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

// des URI book/1, book/2 le paramètre {id} est paramètre variable
// récupérer par la méthode show
Route::get('book/{id}', 'FrontController@show');

// page index 
Route::get('/books', 'FrontController@index');