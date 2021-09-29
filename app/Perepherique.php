<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perepherique extends Model
{
    public function poste(){
        return $this->belongsTo('App\Poste');

   }
}
