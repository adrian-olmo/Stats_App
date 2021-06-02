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

    public function playerTeam($id)
    {
        $playerTeam = $id;

        $result = Players::select('players.*', 'teams.name as team', 'positions.name as position')
            ->join('teams', 'players.team_id', 'teams.id')
            ->join('positions', 'players.position_id', 'positions.id')
            ->where('teams.id', $playerTeam)
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

    public function storePlayer(Request $request)
    {
        $data = $request->all();
        $newPlayer = Players::create($data);
        return response()->json(['new player' => $newPlayer], 201);
    }

    public function updatePlayer(Request $request, $id)
    {
        $player = Players::findOrFail($id);

        if ($request->has('name')) {
            $player->name = $request->name;
        }
        if ($request->has('age')) {
            $player->age = $request->age;
        }
        if ($request->has('matches')) {
            $player->matches = $request->matches;
        }
        if ($request->has('debut')) {
            $player->debut = $request->debut;
        }
        if ($request->has('team_id')) {
            $player->team_id = $request->team_id;
        }
        if ($request->has('position_id')) {
            $player->position_id = $request->position_id;
        }

        $player->save();
        return response()->json(['message' => "Update Succesfully"], 200);
    }

    public function destroyPlayer($id)
    {
        $player = Players::findOrFail($id);
        $player->delete();

        return response()->json(['message' => "Delete Succefuly"], 202);
    }
}
