<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    

    public function proprietaire()
    {
        return $this->belongsTo('App\Proprietaire');
    }

    public function carteGrise()
    {
        return $this->hasOne('App\CarteGrise');
    }
}
