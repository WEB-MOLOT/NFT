<?php

use App\Facades\PageLoader;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manage;

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

Route::group(
    [
        'as' => 'manage.',
        'prefix' => 'manage',
        //'middleware' => ['auth', 'can:view-any']
    ],
    static function() {
        Route::get('', Manage\IndexController::class)->name('pages.index');

        Route::as('resources.')->group(static function() {
            Route::resource('pages', Manage\Resources\PageController::class);
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
    }
);
