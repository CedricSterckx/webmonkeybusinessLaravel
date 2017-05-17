<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public static function scopeKlantnummer($query, $val){

        return $query->where('klantnummer', $val);
    }
}
