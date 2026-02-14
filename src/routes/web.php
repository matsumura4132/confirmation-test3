<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
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



Route::middleware('auth')->group(function () {
Route::get('/', [AuthController::class, 'index']
);
});
 
Route::get('register/step1', [RegisterController::class, 'step1'])->name('register.step1');
Route::post('register/step2', [RegisterController::class, 'step2'])->name('register.step2');
