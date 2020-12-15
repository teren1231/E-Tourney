<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\game;
use App\berita;
use App\tournament;



class MyController extends Controller
{

    public function CallTournament($id){
        $tournament = tournament::where('id' , $id)->get();
        $game = game::all();
        return view('tourney' , ['tournament' => $tournament , 'game' => $game]);
    }

    public function CallGames(){
        $game = game::all();
        $berita = berita::all();
        return view('home', ['game' => $game , 'berita' => $berita]);
    }

    public function CallBerita($id){
        $berita = berita::where('id' , $id)->get();
        $game = game::all();
        return view('news' , ['berita' => $berita , 'game' => $game]);
    }
}
