<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Backend / Admin
|--------------------------------------------------------------------------
*/

// CRUD Banner
Route::resource('banner', BannerController::class)->except(['show']);

// CRUD News
Route::resource('news', NewsController::class)->except(['show']);

// CRUD FAQ (backend)
Route::resource('faq', FaqController::class)->except(['show']);
