<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Support\Facades\Route;


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

Route::post('message', MessageController::class)->name('messages.store');
Route::post('order', OrderController::class)->name('orders.store');

Route::resource('categories', CategoryController::class)->only('index', 'show');



Route::post('projects/publish/{id}', [ProjectController::class, 'publish']);
Route::get('projects/get-unpublished', [ProjectController::class, 'getUnpublishedProjects']);

Route::resource('projects', ProjectController::class)->except('data', 'create', 'edit');


