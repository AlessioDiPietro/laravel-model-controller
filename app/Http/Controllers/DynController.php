<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class DynController extends Controller
{
    public function home() {
        $libreria = Comic::all(); 
        return view('index', compact('libreria'));
    }

    public function det($id) {
        $dettaglioFum = Comic::where('id', $id)->first(); 
        return view('details', compact('dettaglioFum'));
    }
}
