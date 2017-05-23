<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = ['Naam', 'Klantnummer', 'Locatie', 'Begindatum'
        , 'EindDatum', 'Description', 'Evenementkost', 'token_key'];


    public static function scopeKlantnummer($query, $val)
    {

        return $query->where('klantnummer', $val);
    }
}
