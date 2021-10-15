<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;

class PlayerController extends Controller
{
    public function show($id)
    {
        $player = Player::where('id', $id)->get();
        return view('pages.showPlayer', compact('player'));
    }
}
