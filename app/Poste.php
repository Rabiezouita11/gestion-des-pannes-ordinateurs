<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    public function laboratoire(){
        return $this->belongsTo('App\Laboratoire');

   }

   public function perepherique(){
    return $this->hasMany('App\Perepherique');
}

}
