<?php

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
        'middleware' => ['auth', 'can:view-any']
    ],
    static function() {
        Route::get('', Manage\IndexController::class)->name('index');
    }
);

Route::group(
    [
        'as' => 'visible.'
    ],
    static function() {

    }
);
