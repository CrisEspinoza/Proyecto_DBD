<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // Atributos
        protected $fillable = [
        'name',
    ];

    public function region(){
        return $this->hasMany('App\Region');
    }
}
