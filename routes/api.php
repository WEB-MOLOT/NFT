<?php

use App\Http\Controllers\Api\Data;
use App\Http\Controllers\Api\Forms;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);


// Route::group(function () {
    Route::post('logout', [LoginController::class, 'logouot']);
    Route::get('me', [LoginController::class, 'me']);
// });


Route::post('message', Forms\MessageController::class)->name('messages.store');
Route::post('order', Forms\OrderController::class)->name('orders.store');

Route::resource('categories', Data\CategoryController::class)->only('index', 'show');
Route::resource('projects', Data\ProjectController::class)->except('data', 'create', 'edit', 'destroy');
