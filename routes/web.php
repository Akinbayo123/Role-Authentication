<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
Route::get('/login','view_login')->name('login');
Route::post('/authenticate', 'authenticate')->name('authenticate');
Route::get('/admin',  'admin')->name('admin')->middleware(['admin','auth']);
Route::get('/subscriber',  'subscriber')->name('subscriber')->middleware(['subscriber','auth']);
});