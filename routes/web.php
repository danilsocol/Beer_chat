<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/auth', function () {
    return view('auth');
});

Route::get('/reg', function () {
    return view('reg');
});*/

Route::get('/auth', [LoginController::class, 'create']) -> middleware('guest') -> name('login');
Route::post('/auth',[LoginController::class, 'store']) -> middleware('guest');
Route::post('logout', [LoginController::class, 'destroy'])-> middleware('auth')->name('logout');

Route::get('/reg', [RegisterController::class, 'create']) -> middleware('guest') -> name('register');
Route::post('/reg',[RegisterController::class, 'store']) -> middleware('guest');
