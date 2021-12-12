<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

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

Route::get('/', [HomeController::class, 'getHome']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/productos', [ProductoController::class, 'getIndex']);
    Route::get('/productos/show/{id}', [ProductoController::class, 'getShow']);
    Route::get('/productos/create', [ProductoController::class, 'getCreate']);
    Route::get('/productos/edit/{id}', [ProductoController::class, 'getEdit']);
    Route::post('/productos/create', [ProductoController::class, 'postCreate']);
    Route::put('/productos/edit/{id}', [ProductoController::class, 'putEdit']);
});



Auth::routes();

Route::get('/home', [HomeController::class, 'getHome'])->name('home');
