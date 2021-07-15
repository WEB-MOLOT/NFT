<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Support\Facades\Route;


//Route::post('login',  [\App\Http\Controllers\Auth\ApiLoginController::class, 'login']);
//
//Route::group(['middleware' => ['jwt.auth']], function () {
//    Route::post('logout', [\App\Http\Controllers\Auth\ApiLoginController::class, 'logout']);
//    Route::get('me', [\App\Http\Controllers\Auth\ApiLoginController::class, 'me']);
//});

Route::post('message', MessageController::class)->name('messages.store');
Route::post('order', OrderController::class)->name('orders.store');

Route::resource('categories', CategoryController::class)->only('index', 'show');


Route::post('projects/publish/{id}', [ProjectController::class, 'publish']);
Route::get('projects/get-unpublished', [ProjectController::class, 'getUnpublishedProjects']);
Route::get('projects/get-published', [ProjectController::class, 'getPublishedProjects']);
Route::get('projects/get-trashed', [ProjectController::class, 'getTrashedProjects']);
Route::post('projects/restore/{id}', [ProjectController::class, 'restore']);
Route::post('projects/verify/{id}', [ProjectController::class, 'verify']);
Route::delete('projects/force-delete/{id}', [ProjectController::class, 'forceDelete']);

Route::post('projects/follow/{id}', [ProjectController::class, 'follow']);
Route::post('projects/unfollow/{id}', [ProjectController::class, 'unfollow']);

Route::resource('projects', ProjectController::class)->except('data', 'create', 'edit');


Route::post('promotions/send-order', [\App\Http\Controllers\Api\PromotionController::class, 'sendOrder']);
Route::apiResource('promotions', \App\Http\Controllers\Api\PromotionController::class);

Route::get('users/get-followed-projects/{userId}', [\App\Http\Controllers\Api\UserController::class, 'getFollowedProjects']);
Route::get('users/get-projects/{id}', [\App\Http\Controllers\Api\UserController::class, 'getProjects']);
Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);

Route::get('search', \App\Http\Controllers\Api\SearchController::class);
