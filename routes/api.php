<?php

use App\Http\Controllers\Api\Data;
use App\Http\Controllers\Api\Forms;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Controllers;



Route::middleware('auth:sanctum')->get('/user', function (\Illuminate\Http\Request $request) {
    return $request->user();
});

Route::post('/login', LoginController::class);


Route::post('message', Forms\MessageController::class)->name('messages.store');
Route::post('order', Forms\OrderController::class)->name('orders.store');

Route::resource('categories', Data\CategoryController::class)->only('index', 'show');
Route::resource('projects', Data\ProjectController::class)->except('data', 'create', 'edit', 'destroy');
