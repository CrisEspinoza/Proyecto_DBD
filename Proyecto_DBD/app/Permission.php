<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    // Atributos
        protected $fillable = [
        'name',
    ];

    public function rol(){
        return $this->belongsTo('App\Rol');
    }
}
