<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserRol;
use Faker\Generator as Faker;

$factory->define(UserRol::class, function (Faker $faker) {
    
    	// Pluck => Entrega la colección de datos en donde solo va a contener los 'id' de los distintos
    	//				tipos de informacion que hayan. 
    $id_user = App\User::pluck('id')->toArray();
    $id_rol = App\Rol::pluck('id')->toArray();
    
    return [
        'id_user' => $faker->randomElement($id_user),
        'id_role' => $faker->randomElement($id_rol),
    ];
});
