<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\UserController;
use  App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});
Route::get('/form', [FormController::class, 'form']);
Route::post('/form', [FormController::class, 'Store'])->name('frontend.form');

