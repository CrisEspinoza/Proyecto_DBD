<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    // Atributos
        protected $fillable = [
        'name',
    ];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function region(){
        return $this->belongsTo('App\Region');
    }

}
