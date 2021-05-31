<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::all();
        return response()->json(['teams' => $teams], 201);
    }

    public function teamName(Request $request)
    {
        $name = $request->name;
        $result = Teams::where('name', 'like', '%' . $name . '%')->get();

        return response()->json($result);
    }
    public function teamConfederation(Request $request)
    {
        $confederation = $request->confederation;
        $result = Teams::where('confederation', 'like', '%' . $confederation . '%')->get();

        return response()->json($result);
    }
    public function teamManager(Request $request)
    {
        try {

            $manager = $request->manager;
            $result = Teams::where('manager', 'like', '%' . $manager . '%')->get();
            return response()->json($result);
        } catch (\Exception $err) {
            return response()->json(['Error Message' => 'Entrenador no encontrado'], 400);
        }
    }
}
