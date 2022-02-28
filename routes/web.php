<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('enduser_welcome');
});
Route::get('/',[ProductsController::class , 'showProducts']);
Route::resource('/enduser', ProductsController::class);
Route::get('/search',[ProductsController::class, 'search']);
Route::resource('profile',UsersController::class);
Route::resource('/posts', PostController::class);
Route::get('/users/{user}/posts', [UsersController::class, 'showuserposts'])->name('users.showuserposts');
Route::get('/products/{product}/posts', [ProductsController::class, 'showproposts'])->name('products.showproposts');






Route::get('cart', [CartController::class, 'cartList'])->name('cart.list')->middleware('auth');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store')->middleware('auth');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


Auth::routes(['verify' => true]);


// Google Login
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

// Github Login
Route::get('auth/github', [GoogleSocialiteController::class, 'redirectToGithub']);
Route::get('callback/github', [GoogleSocialiteController::class, 'handleCallback']);








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
