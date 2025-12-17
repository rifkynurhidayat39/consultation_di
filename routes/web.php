<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\VisionMissionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SambutanController;

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/about', [FrontendController::class, 'aboutus'])->name('about');


/*
|--------------------------------------------------------------------------
| Backend / Admin
|--------------------------------------------------------------------------
*/

// Banner
Route::resource('banner', BannerController::class)->except(['show']);

// News
Route::resource('news', NewsController::class)->except(['show']);

// CRUD FAQ (backend)
Route::resource('faq', FaqController::class)->except(['show']);

// CRUD Visi Misi (backend)
Route::prefix('admin')->group(function () {
    Route::get('/vision-mission', [VisionMissionController::class, 'index'])
        ->name('vision-mission.index');

    Route::get('/vision-mission/{id}/edit', [VisionMissionController::class, 'edit'])
        ->name('vision-mission.edit');

    Route::put('/vision-mission/{id}', [VisionMissionController::class, 'update'])
        ->name('vision-mission.update');
});


// Contact (tanpa create & store)
Route::resource('contact', ContactController::class)
    ->only(['index', 'edit', 'update']);

// Sambutan (TETAP, HANYA EDIT)
Route::get('/sambutan', [SambutanController::class, 'index'])
    ->name('sambutan.index');

Route::get('/sambutan/edit', [SambutanController::class, 'edit'])
    ->name('sambutan.edit');

Route::put('/sambutan/update', [SambutanController::class, 'update'])
    ->name('sambutan.update');