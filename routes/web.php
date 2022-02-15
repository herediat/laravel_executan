<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/admin/dashboard', [BackController::class, 'admin'])->middleware(['auth', 'isAdmin'])->name('dashboard');
Route::get('/admin/client', [BackController::class, 'client'])->middleware(['auth'])->name('client');

require __DIR__.'/auth.php';
