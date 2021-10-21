<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Comment;
use App\Models\Player;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $teams = Team::all();

        return view('pages.index', compact('teams'));
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        $players = $team->players; // Player::with('team')->where('team_id', $id)->get();
        $comments = $team->comments; // Comment::where('team_id', $players[0]->team_id)->get();
        return view('pages.showTeam', compact('team', 'players', 'comments'));
    }
}
