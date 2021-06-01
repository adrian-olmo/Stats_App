<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function storeTeam(Request $request)
    {
        $data = $request->all();
        $newTeam = Teams::create($data);
        return response()->json(['new team' => $newTeam], 201);
    }

    public function updateTeam(Request $request, $id)
    {
        $team = Teams::findOrFail($id);

        if ($request->has('name')) {
            $team->name = $request->name;
        }
        if ($request->has('confederation')) {
            $team->name = $request->name;
        }
        if ($request->has('manager')) {
            $team->name = $request->name;
        }
        if ($request->has('fifa_rank')) {
            $team->name = $request->name;
        }
        if ($request->has('total_titles')) {
            $team->name = $request->name;
        }
        if ($request->has('logo')) {
            $team->name = $request->name;
        }

        $team->save();
        return response()->json(['message' => "Update Succesfully"], 200);
    }

    public function destroyTeam(Request $request)
    {
    }
}
