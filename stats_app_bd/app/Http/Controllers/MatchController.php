<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $match = Matches::findOrFail($id);

        if ($request->has('local_team')) {
            $match->local_team = $request->local_team;
        }
        if ($request->has('visitor_team')) {
            $match->visitor_team = $request->visitor_team;
        }
        if ($request->has('stadium')) {
            $match->stadium = $request->stadium;
        }
        if ($request->has('date')) {
            $match->date = $request->date;
        }
        if ($request->has('status')) {
            $match->status = $request->status;
        }
        if ($request->has('competition_id')) {
            $match->competition_id = $request->competition_id;
        }

        $match->save();
        return response()->json(['message' => "Update Succesfully"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = Matches::findOrFail($id);
        $match->delete();

        return response()->json(['message' => "Delete Succefuly"], 202);
    }
}
