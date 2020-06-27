<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // Atributos
        protected $fillable = [
        'name',
    ];

    public function user(){
        return $this->belongsToMany('App\Rol');
    }

    public function commentary(){
        return $this->hasMany('App\Commentary');
    }
}
