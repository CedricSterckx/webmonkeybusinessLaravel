<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;

class EvenementsController extends Controller
{

    public function index()
    {
        $evenementen = DB::table('evenementen')->get();

//        dd($evenementen);
        $evenementen = Evenement::all();
        return view('evenementen.evenementen-list', compact('evenementen'));
    }

    public function show(Evenement $evenement){

    $evenement = DB::table('evenementen')->find($evenement);


    return view('evenementen.show', compact('evenement'));
    }


}
