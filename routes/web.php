<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,"home"])->name("homepage");
Route::get('/about',[HomeController::class,"about"])->name("aboutpage");
Route::get('/contact',[HomeController::class,"contact"])->name("contactpage");
Route::get('/gallery',[HomeController::class,"gallery"])->name("gallerypage");