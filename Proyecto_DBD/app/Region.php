<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    // Atributos
        protected $fillable = [
        'name',
    ];

    public function commune(){
        return $this->hasMany('App\Commune');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }
}
