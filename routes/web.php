<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSController;
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



Auth::routes();
Route::get('/login_example', function () {
    return view('auth.login');
});
Route::get('/register_example', function () {
    return view('auth.register');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/sms', [App\Http\Controllers\SMSController::class, 'index'])->name('send-sms');
