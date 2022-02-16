<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



Route::prefix('admin')->group(function(){
    Route::get('/' , [DashboardController::class , 'index' ]); 
    Route::resource('/users', UsersController::class);


});
