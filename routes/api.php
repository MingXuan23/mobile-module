<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ModuleTestController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Module2Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('welcome', [ModuleTestController::class, 'index']);

Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::put('/updateStatus/{id}/{status}', [EventController::class, 'updateStatus'])->name('events.updateStatus');
});

Route::prefix('tickets')->group(function () {
    Route::get('/', [TicketController::class, 'index'])->name('tickets.index');
    Route::post('/store', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/delete/{id}', [TicketController::class, 'destroy'])->name('tickets.destroy');
  
});

Route::prefix('m2')->group(function () {
  
    Route::get('/getSkillType', [Module2Controller::class, 'getSkillType'])->name('m2.getSkillType');
    Route::get('/getSkills', [Module2Controller::class, 'getSkills'])->name('m2.getSkills');
    Route::get('/getPhotoPagination/{limit}', [Module2Controller::class, 'getPhotoPagination'])->name('m2.getPhotoPagination');
    Route::get('/getPhotos', [Module2Controller::class, 'getPhotos'])->name('m2.getPhotos');

    Route::post('/updateView', [Module2Controller::class, 'updatePhotoView'])->name('m2.updatePhotoView');

   // Route::get('/delete/{id}', [Module2Controller::class, 'destroy'])->name('tickets.destroy');
  
});