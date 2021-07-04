<?php

use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\SuppliesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomersController;

use App\Models\Carrousel;

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
    $carruseles = Carrousel::orderBy('id', 'desc')->get();
    return view('welcome',compact('carruseles'));
});

Route::middleware(['prefix', 'admin'])->group(function () {

});

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users',UsersController::class);
Route::get('users/{id}/destroy', [UsersController::class, 'destroy'])->name('users.destroy');
Route::get('users/{id}/update', [UsersController::class, 'update'])->name('users.update');

Route::resource('customers',CustomersController::class);
Route::get('customers/{id}/destroy', [CustomersController::class, 'destroy'])->name('customers.destroy');
Route::get('customers/{id}/update', [CustomersController::class, 'update'])->name('customers.update');

Route::resource('supplies',SuppliesController::class);
Route::get('supplies/{id}/destroy', [SuppliesController::class, 'destroy'])->name('supplies.destroy');
Route::get('supplies/{id}/update', [SuppliesController::class, 'update'])->name('supplies.update');

Route::resource('products',ProductsController::class);
Route::get('products/{id}/destroy', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('products/{id}/update', [ProductsController::class, 'update'])->name('products.update');

Route::resource('orders',OrdersController::class);
Route::get('orders/{id}/destroy', [OrdersController::class, 'destroy'])->name('orders.destroy');
Route::get('orders/{id}/update', [OrdersController::class, 'update'])->name('orders.update');

Route::resource('carrousels',CarrouselController::class);
// Guardar foto para carrucel
Route::post('caruselimage', [CarrouselController::class, 'caruselimage']);
Auth::routes();

//Perfil
Route::resource('profile',ProfileController::class);
Route::get('profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('perfil', [ProfileController::class, 'index'])->name('perfil');
Route::get('password', [ProfileController::class, 'index'])->name('password');

//image profile
Route::post('profileimage', [ProfileController::class, 'profileimage']);
Route::put('update/{id}', [ProfileController::class, 'update'])->name('user.update');

Route::get('change-password', [ProfileController::class, 'index'])->name('moders.password');
Route::post('change-password', [ProfileController::class, 'store'])->name('change.password');
