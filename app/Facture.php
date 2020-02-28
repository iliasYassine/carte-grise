<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    

    public function commandes(){

        return $this->hasMany('App\Comande');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}
