<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function news(){
        return view('news');
    }

    public function tourney(){
        return view('tourney');
    }
}
