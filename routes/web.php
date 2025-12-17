<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SambutanController;

use function Ramsey\Uuid\v5;

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

// Banner
Route::resource('banner', BannerController::class)->except(['show']);

// News
Route::resource('news', NewsController::class)->except(['show']);

// FAQ
Route::resource('faq', FaqController::class)->except(['show']);

// Sambutan (TETAP, HANYA EDIT)
Route::get('/sambutan', [SambutanController::class, 'index'])
    ->name('sambutan.index');

Route::get('/sambutan/edit', [SambutanController::class, 'edit'])
    ->name('sambutan.edit');

Route::put('/sambutan/update', [SambutanController::class, 'update'])
    ->name('sambutan.update');