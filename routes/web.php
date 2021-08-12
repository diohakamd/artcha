<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\MarkerDetectionController;
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
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('auth.register');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('success');
Route::get('/detect/{num}', [App\Http\Controllers\MarkerDetectionController::class, 'index']);
Route::post('/sms', [App\Http\Controllers\SMSController::class, 'index'])->name('send-sms');
