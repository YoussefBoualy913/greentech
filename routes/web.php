<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientContreller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterContreller;
use App\Http\Controllers\VisiteurController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserIsAdmin;
use App\Http\Middleware\EnsureUserIsClient;
use GuzzleHttp\Client;

//authentification 
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

//admin
Route::resource('products', ProductController::class)->only('index','create','store','edit','update','destroy')->middleware(EnsureUserIsAdmin::class);

//Client
Route::prefix('/client')->middleware(EnsureUserIsClient::class)->controller(ClientContreller::class)->group(function(){
    Route::get('/index','index')->name('favorite.index');
    Route::get('/store/{product}','store')->name('favorite.store');
    
    });

//visiteur
Route::get('/',[VisiteurController::class,'index'])->name('home');
Route::resource('products', ProductController::class)->only('show');