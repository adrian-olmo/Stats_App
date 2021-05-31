<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = Players::select('players.*', 'teams.name as team', 'positions.name as position')
            ->join('teams', 'players.team_id', 'teams.id')
            ->join('positions', 'players.position_id', 'positions.id')
            ->get();

        return response()->json(['players' => $player], 201);
    }

    public function playerName(Request $request)
    {
        $playerName = $request->playerName;

        try {

            $result = Players::select('players.*', 'teams.name as team', 'positions.name as position')
                ->join('teams', 'players.team_id', 'teams.id')
                ->join('positions', 'players.position_id', 'positions.id')
                ->where('players.name', 'like', '%' . $playerName . '%')
                ->get();

            return response()->json($result);
        } catch (\Exception $th) {

            return response()->json([$th, 409]);
        }
    }

    public function playerPosition(Request $request)
    {
        $playerPosition = $request->playerPosition;

        $result = Players::select('players.*', 'positions.name as positon')
            ->join('positions', 'players.position_id', 'positions.id')
            ->where('positions.name', 'like', '%' . $playerPosition . '%')
            ->get();
        return response()->json($result);
    }

    public function playerTeam(Request $request)
    {
        $playerTeam = $request->playerTeam;

        $result = Players::select('players.*', 'teams.name as team')
            ->join('teams', 'players.team_id', 'teams.id')
            ->where('teams.name', 'like', '%' . $playerTeam . '%')
            ->get();
        return response()->json($result);
    }

    public function playerDebut(Request $request)
    {
        $playerDebut = $request->playerDebut;

        $result = Players::where('debut', 'like', '%' . $playerDebut . '%')
            ->get();
        return response()->json($result);
    }
}
