<?php

use App\Models\ScoreCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api\Score;
use App\Models\Score as ModelsScore;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\MatchController;
use App\Http\Controllers\Api\ScoreController;
use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\ScoreCardController;
use App\Http\Controllers\Api\MatchPlayersController;
use App\Http\Controllers\Api\MatchSummaryController;
use App\Http\Resources\PlayerLogsResource;
use App\Models\MatchPlayer;
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
Route::get('getTotalScores/{scoreCardId}', function($scoreCardId){
    return  DB::table('scores')
                ->select('scores.score_card_id')
                ->selectRaw('Sum(batting_runs) as totalBattingRuns')
                ->selectRaw('Sum(team_runs) as totalTeamRuns')
                ->groupBy('score_card_id')
                ->where('score_card_id', $scoreCardId)
                ->get();
});


Route::get('getBattedPlayersLogs/{match_id}', function ($id) {
    // $result = ScoreCard::with(['scores'])->findOrFail($id);

    // $grouped = $result->scores->groupBy('player_id');

    // return $grouped;

    $result = MatchPlayer::with('player','scores')->where('match_id', $id)
                            ->get();

                            return  PlayerLogsResource::collection($result);

});

// ->addSelect( ModelsScore::where('score_card_id', $scoreCardId))->where('batting_status', 'out')->count();