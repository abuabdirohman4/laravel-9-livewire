<?php

use App\Http\Controllers\LoginController;
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
    return view('pages.crud.index');
});
Route::get('/cascading', function () {
    return view('pages.cascading.index');
});
Route::get('/alpine', function () {
    return view('pages.alpine.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');