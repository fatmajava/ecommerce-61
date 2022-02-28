<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function(){
    Route::get('/' , [DashboardController::class , 'index' ]);



    Route::resource('/users', UsersController::class);
    Route::resource('/roles', RolesController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/posts', PostController::class);
    Route::get('/users/{user}/posts', [UsersController::class, 'showPosts'])->name('users.showposts');









});
