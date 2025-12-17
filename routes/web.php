<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\VisionMissionController;

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

// CRUD Visi Misi (backend)
Route::prefix('admin')->group(function () {
    Route::get('/vision-mission', [VisionMissionController::class, 'edit'])
        ->name('vision-mission.edit');

    Route::post('/vision-mission', [VisionMissionController::class, 'update'])
        ->name('vision-mission.update');
});
