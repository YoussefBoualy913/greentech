<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VisiteurController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserIsAdmin;


Route::get('Loginform',[LoginController::class,'Loginform'])->name('Loginform');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::get('registerform',[VisiteurController::class,'registerform'])->name('registerform');
Route::post('register',[VisiteurController::class,'register'])->name('register');


Route::get('/',[VisiteurController::class,'index'])->name('home');
Route::get('index',[ProductController::class,'index'])->name('products.index')->middleware(EnsureUserIsAdmin::class);
Route::get('create',[ProductController::class,'create'])->name('products.create')->middleware(EnsureUserIsAdmin::class);
Route::post('store',[ProductController::class,'store'])->name('products.store')->middleware(EnsureUserIsAdmin::class);
Route::get('edit/{product}',[ProductController::class,'edit'])->name('products.edit')->middleware(EnsureUserIsAdmin::class);
Route::put('update/{product}',[ProductController::class,'update'])->name('products.update')->middleware(EnsureUserIsAdmin::class);
Route::delete('destroy/{product}',[ProductController::class,'destroy'])->name('products.destroy')->middleware(EnsureUserIsAdmin::class);
Route::get('show/{product}',[ProductController::class,'show'])->name('products.show');
