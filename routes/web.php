<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VisiteurController;
use Illuminate\Support\Facades\Route;


Route::get('/',[VisiteurController::class,'index'])->name('products.home');
Route::get('index',[ProductController::class,'index'])->name('products.index');
Route::get('create',[ProductController::class,'create'])->name('products.create');
Route::post('store',[ProductController::class,'store'])->name('products.store');
Route::get('edit/{product}',[ProductController::class,'edit'])->name('products.edit');
Route::put('update/{product}',[ProductController::class,'update'])->name('products.update');
Route::delete('destroy/{product}',[ProductController::class,'destroy'])->name('products.destroy');
Route::get('show',[ProductController::class,'show']);