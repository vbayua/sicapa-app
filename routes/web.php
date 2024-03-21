<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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

Route::get('dashboard', function() {
    return view('dashboard');
});

Route::get('login', [SessionController::class,'index'])->middleware('guest')->name('login');
Route::post('login', [SessionController::class,'store'])->middleware('guest');
Route::get('logout', [SessionController::class,'destroy'])->middleware('auth');

Route::get('/admin/register', [RegisterController::class,'index']);
Route::post('register', [RegisterController::class,'store']);
