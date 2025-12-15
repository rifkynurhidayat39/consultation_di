<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('banner', BannerController::class)->except(['show']);
