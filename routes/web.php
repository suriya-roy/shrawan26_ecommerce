<?php

use App\Http\Controllers\frontend\pagecontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[pagecontroller::class,'home'])->name("home");
