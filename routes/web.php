<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientContreller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterContreller;
use App\Http\Controllers\VisiteurController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserIsAdmin;


Route::prefix('/auth')->group(function(){
    Route::controller(LoginController::class)->group(function(){
       Route::get('/create','create')->name('auth.create');
       Route::post('/store','store')->name('auth.store');
       Route::get('/logout','logout')->name('auth.logout');
    });
     Route::prefix('/register')->controller(RegisterContreller::class)->group(function(){
       Route::get('/create','create')->name('register.create');
       Route::post('/store','store')->name('register.store');
      
    });
});




Route::get('/',[VisiteurController::class,'index'])->name('home');
Route::get('index',[ProductController::class,'index'])->name('products.index')->middleware(EnsureUserIsAdmin::class);
Route::get('create',[ProductController::class,'create'])->name('products.create')->middleware(EnsureUserIsAdmin::class);
Route::post('store',[ProductController::class,'store'])->name('products.store')->middleware(EnsureUserIsAdmin::class);
Route::get('edit/{product}',[ProductController::class,'edit'])->name('products.edit')->middleware(EnsureUserIsAdmin::class);
Route::put('update/{product}',[ProductController::class,'update'])->name('products.update')->middleware(EnsureUserIsAdmin::class);
Route::delete('destroy/{product}',[ProductController::class,'destroy'])->name('products.destroy')->middleware(EnsureUserIsAdmin::class);
Route::get('show/{product}',[ProductController::class,'show'])->name('products.show');


   Route::prefix('/client')->controller(ClientContreller::class)->group(function(){
         Route::get('/index','index')->name('favorite.index');
         Route::get('/store/{product}','store')->name('favorite.store');

   });