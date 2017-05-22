<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use Illuminate\Support\Facades\DB;

class EvenementsController extends Controller
{

    public function index()
    {

        $evenementen = DB::table('evenements')->get();

//        dd($evenementen);
        $evenementen = Evenement::all();
        return view('evenementen.index', compact('evenementen'));
    }

    public function show(Evenement $evenement){

    $evenement = DB::table('evenements')->find($evenement);


    return view('evenementen.show', compact('evenement'));
    }


}
