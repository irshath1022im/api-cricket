<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MatchPlayersResource;
use App\Models\MatchPlayer;
use Illuminate\Http\Request;

class MatchPlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return MatchPlayersResource::collection(MatchPlayer::with('player')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $result = MatchPlayer::create([
            'match_id' => $request->match_id,
            'player_id' => $request->player_id
        ]);

        return response()->json($result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $result = MatchPlayer::with('player')->where('match_id', $id)->get();
        // $result = Match::with('matchPlayers')->findOrFail($id);

        $result = MatchPlayer::with('player')->where('match_id', $id)->get();

                // return $result;


        return  MatchPlayersResource::collection($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getActivePlayers($matchId)
    {
        $result = MatchPlayer::
                                where('match_id', $matchId)
                                ->where('batting_status', '=', 'active')->get();

        return $result;
    }


    public function getYetToBatPlayers($matchId)
    {
        $result = MatchPlayer::with('player')
                                ->where('match_id', $matchId)
                                ->where('batting_status', '=', 'not yet')->get();

        return $result;
    }

}
