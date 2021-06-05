<?php

use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('carrousels',CarrouselController::class)->names('carrousels');
// Guardar foto para carrucel
Route::post('caruselimage', [CarrouselController::class, 'caruselimage']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Perfil
Route::get('perfil', [ProfileController::class, 'index'])->name('perfil');
Route::get('password', [ProfileController::class, 'index'])->name('password');
//image profile
Route::post('profileimage', [ProfileController::class, 'profileimage']);
Route::put('update/{id}', [ProfileController::class, 'update'])->name('user.update');

Route::get('change-password', [ProfileController::class, 'index'])->name('moders.password');
Route::post('change-password', [ProfileController::class, 'store'])->name('change.password');
