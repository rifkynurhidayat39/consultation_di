<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

// CRUD Banner (admin)
Route::resource('banner', BannerController::class)->except(['show']);

// CRUD News (admin)
Route::resource('news', NewsController::class)->except(['show']);
