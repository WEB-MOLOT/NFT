<?php

use App\Facades\PageLoader;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Social;
use App\Http\Controllers\Manage;
use App\Http\Controllers\Visible\Json;
use App\Http\Controllers\Visible\Personal;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth');

//Route::group(
// [
//     'as' => 'login.social.',
//     'prefix' => 'login/social',
//     'middleware' => ['guest', 'throttle:20,1']
// ],
// static function() {
//     Route::get('google/redirect', [Social\GoogleController::class, 'redirect'])->name('google.redirect');
//     Route::get('google', [Social\GoogleController::class, 'handle'])->name('google.handle');
//
//     /*Route::get('telegram/redirect', [Social\TelegramController::class, 'redirect'])->name('telegram.redirect');
//     Route::get('telegram', [Social\TelegramController::class, 'handle'])->name('telegram.handle');*/
// }
//);

Route::get('/auth/google', [Social\GoogleController::class, 'redirect'])->name('auth.google');
Route::post('/auth/google/callback', [Social\GoogleController::class, 'login']);

Route::get('/', \App\Http\Controllers\Front\IndexController::class)->name('index');
Route::get('/submit', [\App\Http\Controllers\Front\IndexController::class, 'submit'])->name('submit');
Route::get('/active', [\App\Http\Controllers\Front\IndexController::class, 'active'])->name('active');
Route::get('upcoming', [\App\Http\Controllers\Front\IndexController::class, 'upcoming'])->name('upcoming');
Route::get('/contact', [\App\Http\Controllers\Front\IndexController::class, 'contact'])->name('contact');
Route::get('/promotion', [\App\Http\Controllers\Front\IndexController::class, 'promotion'])->name('promotion');
Route::get('/personal-area', [\App\Http\Controllers\Front\IndexController::class, 'personalArea'])
    ->middleware('auth')
    ->name('personal-area');

Route::get('/categories/{slug}', [\App\Http\Controllers\Front\IndexController::class, 'showCategory'])->name('category');
