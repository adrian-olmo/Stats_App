<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;

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

Route::group(
    [
        'prefix' => 'auth'
    ],
    function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('signup', [AuthController::class, 'signUp']);
        Route::group(
            [
                'middleware' => 'auth:api'
            ],
            function () {
                Route::get('logout', [AuthController::class, 'logout']);
            }
        );
    }
);

Route::group(
    [
        'prefix' => 'teams',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [TeamController::class, 'index']);
        Route::get('/team', [TeamController::class, 'teamName']);
        Route::get('/confederation', [TeamController::class, 'teamConfederation']);
        Route::get('/manager', [TeamController::class, 'teamManager']);
    }
);
