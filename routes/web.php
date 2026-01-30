<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VisiteurController;
use Illuminate\Support\Facades\Route;


Route::get('/',[VisiteurController::class,'index']);
Route::get('index',[ProductController::class,'index'])->name('products.index');
Route::get('create',[ProductController::class,'create'])->name('products.create');
Route::post('store',[ProductController::class,'store'])->name('products.store');
Route::get('edit/id{id}',[ProductController::class,'edit']);
Route::patch('update/{id}',[ProductController::class,'update']);
Route::delete('destroy/{id}',[ProductController::class,'destroy']);
Route::get('show/{id}',[ProductController::class,'show']);