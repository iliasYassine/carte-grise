<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommandeItem extends Model
{
    
    public function service(){

        return $this->belongsTo('App\Service');
    }

    public function commande(){

        return $this->belongsTo('App\Commande');
    }
}
