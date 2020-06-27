<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    // Atributos
        protected $fillable = [
        'name',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
