<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\WebsiteController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\BlogController;

Route::get('/',[WebsiteController::class,'home'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/category-blogs/{id}',[WebsiteController::class,'categoryBlogs'])->name('category-blogs');
    Route::get('/details/{id}',[WebsiteController::class,'blogDetails'])->name('details');
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

//    Route::prefix('blogCategory')->name('blogCategory.')->group(function (){
//
//    });

    Route::resource('blogCategory',BlogCategoryController::class);
    Route::resource('blog',BlogController::class);
});
