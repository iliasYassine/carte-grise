<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarteGrise extends Model
{
    
    public function vehicule(){
       
        return $this->belongsTo('App\Vehicule');

    }
    public function services(){       
       return $this->belongsToMany('App\Service');
    }

  
}
