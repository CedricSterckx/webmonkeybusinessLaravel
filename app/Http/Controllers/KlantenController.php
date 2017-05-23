<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klants;
use Illuminate\Support\Facades\DB;


class KlantenController extends Controller
{
    public function index()
    {
        return view('klanten.index');
    }


    public function create()
    {


        $this->validate(request(), [
            'Klantnummer' => 'required',
            'Naam' => 'required',
            'Voornaam' => 'required',
            'Postcode' => 'required',
            'Gemeente' => 'required',
            'Straat' => 'required',
            'Huisnummer' => 'required',
            'Telefoonnummer' => 'required',
            'Email' => 'required'
        ]);

        Klants::create([
            'Klantnummer' => request('Klantnummer'),
            'Naam' => request('Naam'),
            'Voornaam' => request('Voornaam'),
            'Postcode' => request('Postcode'),
            'Gemeente' => request('Gemeente'),
            'Straat' => request('Straat'),
            'Huisnummer' => request('Huisnummer'),
            'Telefoonnummer' => request('Telefoonnummer'),
            'Email' => request('Email'),

        ]);


        return view('succes.succes');
    }



}
