<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtatService extends Model
{
    public function services(){

        return $this->hasMany('App\Service');
    }
}
