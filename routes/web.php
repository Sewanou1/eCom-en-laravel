<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page;


Route::get('/',[page::class,'create']);
