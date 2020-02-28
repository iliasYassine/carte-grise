<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   
    public function carteGrises(){
         
        return $this->belongsToMany('App\CarteGrise');
    }

    public function etatService(){

        return $this->belongsTo('App\EtatService');
    }

    public function typeService(){
        return $this->belongsTo('App\TypeService');
    }

    public function commandeItems (){
        return $this->hasMany('App\CommandeItem');
    }
}

