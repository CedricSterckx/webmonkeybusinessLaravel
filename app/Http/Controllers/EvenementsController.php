<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use Illuminate\Support\Facades\DB;

class EvenementsController extends Controller
{

    public function index()
    {
        return view('evenementen.index');
    }

    public function showAllEvents()
    {

        $evenementen = DB::table('evenements')->get();

        dd($evenementen);
        $evenementen = Evenement::all();
        return view('evenementen.evenementen-list', compact('evenementen'));
    }

    public function show(Evenement $evenement)
    {

        $evenement = DB::table('evenements')->find($evenement);


        return view('evenementen.show', compact('evenement'));
    }


    public function create()
    {

        $this->validate(request(), [
            'Naam' => 'required',
            'Klantnummer' => 'required',
            'Locatie' => 'required',
            'Begindatum' => 'required',
            'EindDatum' => 'required',
            'Description' => 'required',
            'Evenementkost' => 'required'
        ]);

        Evenement::create([
            'Naam' => request('Naam'),
            'Klantnummer' => request('Klantnummer'),
            'Locatie' => request('Locatie'),
            'Begindatum' => request('Begindatum'),
            'EindDatum' => request('EindDatum'),
            'Description' => request('Description'),
            'Evenementkost' => request('Evenementkost')

        ]);


        $this->showAllEvents();
    }

}
