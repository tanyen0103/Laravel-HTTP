<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\PostController;
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

//Laravel 9 Http cURL GET Request Example
//Laravel 9 API with Response
Route::get('posts', [PostController::class, 'index']);

//Laravel 9 Http cURL POST Request Example
Route::get('posts/store', [PostController::class, 'store']);

//Laravel 9 Http cURL PUT Request Example
Route::get('posts/update', [PostController::class, 'update']);

//Laravel 9 Http cURL DELETE Request Example
Route::get('posts/delete', [PostController::class, 'delete']);


