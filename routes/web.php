<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



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

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/motor/{jenis?}',function($jenis=null){
    if($jenis == null) return "Dashboard Page";
    return "Motor dengan jenis ".$jenis;
});

Route::get('/coba', function () {
    return view('coba');
});


// untuk mengambil ...
Route::get('/book',[BookController::class, 'index']);
Route::get('/vbook/{judul}', [BookController::class, 'viewJudul']);