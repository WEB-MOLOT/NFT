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

Route::view('/', 'front.index')->name('index');
Route::view('/submit', 'front.submit')->name('submit');
Route::view('/active', 'front.active')->name('active');
Route::view('/upcoming', 'front.upcoming')->name('upcoming');
Route::view('/contact', 'front.contact')->name('contact');
Route::view('/promotion', 'front.promotion')->name('promotion');
Route::view('/personal-area', 'front.personal-area')->middleware('auth')->name('personal-area');

Route::get('/categories/{slug}', [\App\Http\Controllers\Front\IndexController::class, 'showCategory'])->name('category');
Route::get('projects/{slug}', [\App\Http\Controllers\Front\IndexController::class, 'showProject'])->name('project');
