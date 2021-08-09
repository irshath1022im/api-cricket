<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MatchSummaryResources;
use App\Models\MatchSummary;
use App\Models\Match;

use Illuminate\Http\Request;

class MatchSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $result = MatchSummary::with(['match' => function($query){
            return $query -> with('team1', 'team2', 'played_players')
                        ->get();
                  }])->paginate(2);

        // $result = Match::with(['matchSummary', 'score_card' => function($query) {
        //         return $query -> with('scores')
        //                      ->get();
        // }])
        //                 ->where('status', 'closed')
        //                 ->get();

        //    return $result;
        // return response()->json($result);

        return MatchSummaryResources::Collection($result);
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
}
