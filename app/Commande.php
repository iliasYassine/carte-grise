<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    
  public function commandeItems(){

    return $this->hasMany('App\commandeitem');
  } 
  
  public function commande(){

    return $this->belongsTo('App\Facture');
  }
}
