<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynController extends Controller
{
    public function home() {
        $data = ['libreria'=> config('comics')]; 
        return view('index', $data);
    }

    public function det($id) {
        $data = ['dettaglioFum'=> config('comics')[$id]]; 
        return view('details', $data);
    }
}
