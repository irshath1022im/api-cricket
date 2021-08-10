<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScoreCardShowResources;
use App\Http\Resources\ScoreCardsResource;
use App\Models\ScoreCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ScoreCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // return ScoreCard::with('match')->get();
        $result = ScoreCard::with('match')->get();

        return ScoreCardsResource::collection($result);
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
        $result = ScoreCard::with(['match','scores'])->findOrFail($id);

        // $grouped = $result->scores->groupBy('player_id');

        // return $grouped;
            // dd($result);
        return new ScoreCardShowResources($result);
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
