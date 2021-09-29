<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    public function post(){
        return $this->hasMany('App\Poste');
    }
}
