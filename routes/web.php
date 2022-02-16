<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

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
Route::get('/admin/serveur/main', [BackController::class, 'serveur'])->middleware(['auth', 'isAdmin'])->name('serveur.main');
Route::get('/admin/user/main', [BackController::class, 'user'])->middleware(['auth'])->name('user.main');


Route::get('/admin/utilisateurs/main', [BackController::class, 'utilisateurs'])->middleware(['auth'])->name('utilisateurs.main');
Route::get('/admin/images/main', [BackController::class, 'images'])->middleware(['auth'])->name('images.main');
Route::get('/admin/gallerie/main', [BackController::class, 'gallerie'])->middleware(['auth'])->name('galleries.main');
Route::get('/admin/categories/main', [BackController::class, 'categories'])->middleware(['auth'])->name('categories.main');
Route::get('/admin/avatars/main', [BackController::class, 'avatars'])->middleware(['auth'])->name('avatars.main');


require __DIR__.'/auth.php';
