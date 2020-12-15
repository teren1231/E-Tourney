<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\game;

class MyController extends Controller
{
    public function news(){
        return view('news');
    }

    public function tourney(){
        return view('tourney');
    }

    public function CallGames(){
        $game = game::all();
        return view('gameList', ['game' => $game]);
    }
}
