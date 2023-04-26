<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [AuthController::class, 'loginview'])->name('login');
Route::post('/login/checklogin', [AuthController::class, 'checkLogin'])->name('check-login');
Route::get('/signup', [RegisterController::class, 'create'])->name('signup');
Route::post('/signup/store', [RegisterController::class, 'store'])->name('signup-store');


Route::middleware([auth::class])->group(function(){
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit-profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('update-profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
