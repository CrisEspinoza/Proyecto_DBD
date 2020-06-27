<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commune;
use Faker\Generator as Faker;

$factory->define(Commune::class, function (Faker $faker) {
	
	$id_region = App\Region::pluck('id')->toArray();

    return [
        //
         'name' => $faker->word,
         'region_id' => $faker->randomElement($id_region),
    ];
});
