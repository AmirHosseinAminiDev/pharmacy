<?php

use App\Http\Controllers\User\HomeController;
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
Route::prefix('/')->namespace('User')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('user.index');
    Route::prefix('/contact-us')->group(function () {
        Route::get('/', [HomeController::class, 'contactUs'])->name('user.contact-us');
        Route::post('/send', [HomeController::class, 'sendMessage'])->name('user.contact-us.send');
    });
});
