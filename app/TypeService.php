<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeService extends Model
{
    
    public function service(){

        return $this->hasMany('App\Service');
    }
}
