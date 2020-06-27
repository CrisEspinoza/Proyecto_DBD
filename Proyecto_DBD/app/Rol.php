<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    // Atributos
        protected $fillable = [
        'name',
    ];

    // Relaciones

    public function permissions(){
        return $this->hasMany('App\Permission');
    }

    public function user(){
        return $this->belongsToMany('App\Rol');
    }
}
