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
    return view('inicio');
});
Route::get('/tema1', function () {
    return view('page');
});
Route::get('/tema2', function () {
    return view('page2');
});
Route::get('/tema3', function () {
    return view('page3');
Auth::routes();
});
Route::get('/tema4', function () {
    return view('page4');
Auth::routes();
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


