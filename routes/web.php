<?php

use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\SuppliesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\StocksController;

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

Route::middleware(['prefix', 'admin'])->group(function () {

});
Route::resource('users',UsersController::class);
Route::get('users/{id}/destroy', [UsersController::class, 'destroy'])->name('users.destroy');
Route::get('users/{id}/update', [UsersController::class, 'update'])->name('users.update');

Route::resource('customers',CustomersController::class);
Route::get('customers/{id}/destroy', [CustomersController::class, 'destroy'])->name('customers.destroy');
Route::get('customers/{id}/update', [CustomersController::class, 'update'])->name('customers.update');

Route::resource('types',TypesController::class);
Route::get('types/{id}/destroy', [TypesController::class, 'destroy'])->name('types.destroy');
Route::get('types/{id}/update', [TypesController::class, 'update'])->name('types.update');

Route::resource('supplies',SuppliesController::class);
Route::get('supplies/{id}/destroy', [SuppliesController::class, 'destroy'])->name('supplies.destroy');
Route::get('supplies/{id}/update', [SuppliesController::class, 'update'])->name('supplies.update');
//Route::resource('products',ProductsController::class);
//Route::resource('stocks',StocksController::class);
//Route::resource('orders',OrdersController::class);


Route::resource('carrousels',CarrouselController::class)->names('carrousels');
// Guardar foto para carrucel
Route::post('caruselimage', [CarrouselController::class, 'caruselimage']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Perfil
Route::resource('profile',ProfileController::class);
Route::get('perfil', [ProfileController::class, 'index'])->name('perfil');
Route::get('password', [ProfileController::class, 'index'])->name('password');

//image profile
Route::post('profileimage', [ProfileController::class, 'profileimage']);
Route::put('update/{id}', [ProfileController::class, 'update'])->name('user.update');

Route::get('change-password', [ProfileController::class, 'index'])->name('moders.password');
Route::post('change-password', [ProfileController::class, 'store'])->name('change.password');
