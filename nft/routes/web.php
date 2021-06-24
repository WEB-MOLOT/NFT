<?php

use App\Facades\PageLoader;
use App\Http\Controllers\Auth\LoginController;
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

Route::group(
    [
        'as' => 'login.social.',
        'prefix' => 'login/social',
        'middleware' => ['guest', 'throttle:20,1']
    ],
    static function() {
        Route::get('google/redirect', [Social\GoogleController::class, 'redirect'])->name('google.redirect');
        Route::get('google', [Social\GoogleController::class, 'handle'])->name('google.handle');

        Route::get('telegram/redirect', [Social\TelegramController::class, 'redirect'])->name('telegram.redirect');
        Route::get('telegram', [Social\TelegramController::class, 'handle'])->name('telegram.handle');
    }
);

Route::group(
    [
        'as' => 'manage.',
        'prefix' => 'manage',
        //'middleware' => ['auth', 'can:view-any']
    ],
    static function() {
        Route::get('', Manage\IndexController::class)->name('pages.index');

        Route::get('settings', [Manage\OptionController::class, 'index'])->name('options.index');
        Route::put('settings', [Manage\OptionController::class, 'update'])->name('options.update');

        Route::as('resources.')->group(static function() {
            Route::resource('pages', Manage\Resources\PageController::class);
            Route::resource('listings', Manage\Resources\ListingController::class)->except('show');

            Route::resource('users', Manage\Resources\UserController::class)->except('show');

            Route::resource('categories', Manage\Resources\CategoryController::class)->except('show');
            Route::resource('projects', Manage\Resources\ProjectController::class)->except('create', 'store');
        });
    }
);

Route::group(
    [
        'as' => 'visible.'
    ],
    static function() {
        PageLoader::routes();

        Route::group(
            [
                'prefix' => 'personal',
                'as' => 'personal.',
                'middleware' => 'auth'
            ],
            static function() {
                Route::get('', Personal\IndexController::class)->name('index');
            }
        );

        Route::group(
            [
                'prefix' => 'json',
                'as' => 'json.'
            ],
            static function() {
                Route::post('order', Json\SubmitOrderController::class)->name('submit.order');
                Route::post('message', Json\SubmitMessageController::class)->name('submit.message');
                Route::post('project', Json\SubmitProjectController::class)->name('submit.project');
            }
        );
    }
);
