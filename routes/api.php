<?php

use App\Http\Controllers\Api\Data;
use App\Http\Controllers\Api\Forms;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Controllers;



//Route::middleware('auth:sanctum')->get('/user', function (\Illuminate\Http\Request $request) {
//    return $request->user();
//});
//
//Route::get('token', function(Request $request) {
//   return response()->json($request->session()->token());
//});
//
//Route::post('/login', LoginController::class);
//Route::post('/logout', [LoginController::class, 'logout']);
//Route::post('/register', [RegisterController::class, 'register']);
//

Route::post('message', Forms\MessageController::class)->name('messages.store');
Route::post('order', Forms\OrderController::class)->name('orders.store');

Route::resource('categories', Data\CategoryController::class)->only('index', 'show');
Route::resource('projects', Data\ProjectController::class)->except('data', 'create', 'edit', 'destroy');
