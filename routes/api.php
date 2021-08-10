<?php

use App\Http\Controllers\Api\MatchController;
use App\Http\Controllers\Api\MatchPlayersController;
use App\Http\Controllers\Api\MatchSummaryController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\Score;
use App\Http\Controllers\Api\ScoreCardController;
use App\Http\Controllers\Api\ScoreController;
use App\Http\Controllers\Api\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('match', MatchController::class);
Route::apiResource('team', TeamController::class);
Route::apiResource('player', PlayerController::class);
Route::apiResource('matchSummary', MatchSummaryController::class);
Route::apiResource('matchPlayer', MatchPlayersController::class);
Route::apiResource('scoreCard', ScoreCardController::class);
Route::apiResource('score', ScoreController::class);

Route::get('matchActivePlayer/{matchId}', [MatchPlayersController::class, 'getActivePlayers']);
Route::get('getYetToBatPlayers/{matchId}', [MatchPlayersController::class, 'getYetToBatPlayers']);
