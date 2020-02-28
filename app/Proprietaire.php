<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
   

    public function vehicules()
    {
        return $this->hasMany('App\Vehicule');
    }
}
