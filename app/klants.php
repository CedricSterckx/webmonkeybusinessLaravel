<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class klants extends Model
{
    protected $fillable = [ 'Klantnummer', 'Naam', 'Voornaam', 'Postcode', 'Gemeente',
        'Straat', 'Huisnummer', 'Telefoonnummer', 'Email', 'token_key'];

}
