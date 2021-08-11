<?php

namespace App\Http\Controllers\Api;

use App\Models\Team;
use App\Models\Players;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Players::with('team')->paginate(2);
        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required|unique:players,name,except,id',
            'dob' => 'required',
            'url' => 'required',
            'country' => '',
            'batting_style' => '',
            'remark' => '',
            'team_id'=> 'required'
        ]);

        $result = Players::create($validatedData);

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

        $result = Players::findOrFail($id);

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

        $validatedData = $request->validate([
            'name' => 'required|unique:players,name,'.$id, 'id',
            'dob' => 'required',
            'url' => 'required',
            'country' => '',
            'batting_style' => '',
            'remark' => '',
            'team_id'=> 'required'
        ]);


        $result = Players::find($id)->update($validatedData);

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
