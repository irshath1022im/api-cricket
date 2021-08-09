<?php

namespace App\Http\Controllers\Api;

use App\Models\Match;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $result = Match::join('teams', 'teams.id', '=', 'matches.team_one_id')
        //                 ->select('matches.*', 'teams.*')
        //                 ->get();

        $result = Match::with(['team1', 'team2'])->get();


       return response()->json($result);


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
        $validatedData = $request->validate([
            'date' => 'required',
            'team_one_id' => 'required',
            'oppenent_team' => 'required',
            'status' => 'required',
            'remark' => ''
        ]);

        $result = Match::create($validatedData);

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

        $result = Match::with(['team1', 'team2'])->findOrFail($id);

        return response()->json($result);
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

        $validatedData = $request->validate([
            'date' => 'required',
            'team_one_id' => 'required',
            'oppenent_team' => 'required',
            'status' => 'required',
            'remark' => ''
        ]);

        $result = Match::find($id)->update($validatedData);

        return response()->json($result);
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
