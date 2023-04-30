<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\StatusController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('pers', [PersController::class, 'index'])->name('pers.index');
Route::get('pers/{per}', [PersController::class, 'show'])->name('pers.show');
Route::post('pers', [PersController::class, 'store'])->name('pers.store');
Route::patch('pers/{per}', [PersController::class, 'update'])->name('pers.update');
Route::delete('pers/{per}', [PersController::class, 'destroy'])->name('pers.destroy');

// Status
Route::get('status', [StatusController::class, 'index'])->name('status.index');
Route::get('status/{id}', [StatusController::class, 'show'])->name('status.show');

// Title
Route::get('title', [TitleController::class, 'index'])->name('title.index');
Route::get('title/{id}', [TitleController::class, 'show'])->name('title.show');
