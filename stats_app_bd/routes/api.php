<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TeamController;
use App\Models\Players;

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

Route::group(
    [
        'prefix' => 'positions',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [PositionController::class, 'index']);
        Route::get('/position', [PositionController::class, 'positionName']);
    }
);
Route::group(
    [
        'prefix' => 'players',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [PlayerController::class, 'index']);
        Route::get('/player', [PlayerController::class, 'playerName']);
        Route::get('/player-position', [PlayerController::class, 'playerPosition']);
        Route::get('/player-team', [PlayerController::class, 'playerTeam']);
        Route::get('/debut', [PlayerController::class, 'playerDebut']);
    }
);
Route::group(
    [
        'prefix' => 'competitions',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [CompetitionController::class, 'index']);
        Route::get('/competition', [CompetitionController::class, 'competitionName']);
        Route::get('/type', [CompetitionController::class, 'competitionType']);
    }
);
