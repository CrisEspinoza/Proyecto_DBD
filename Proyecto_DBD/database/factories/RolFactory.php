<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rol;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {

	$id_permissions = App\Permission::pluck('id')->toArray();

    return [
        'name' => $faker->word,
        'id_permissions' =>  $faker->randomElement($id_permissions),
    ];
});
