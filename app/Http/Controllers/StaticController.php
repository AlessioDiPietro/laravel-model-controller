<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function charac() {
        return view('characters');
    }

    public function comic() {
        return view('comics');
    }

    public function mov() {
        return view('movies');
    }

    public function serie() {
        return view('tvseries');
    }

    public function game() {
        return view('games');
    }

    public function collec() {
        return view('collector');
    }

    public function video() {
        return view('video');
    }

    public function fan() {
        return view('fans');
    }

    public function new() {
        return view('news');
    }
}
