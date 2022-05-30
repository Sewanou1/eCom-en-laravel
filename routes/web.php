<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/login',[page::class,'create']);
Route::get('/logout',[page::class,'logout'])->name('logout');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/',[ProductController::class,'index'])->name('produit_page');
Route::get('detail/{id}',[ProductController::class,'detail'])->name('detail_page');
Route::get('search',[ProductController::class,'search'])->name('search_page');
Route::post('/add_to_cart',[ProductController::class,'addToCart'])->name('add_Cart');


