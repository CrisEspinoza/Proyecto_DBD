<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Region;
use Faker\Generator as Faker;

$factory->define(Region::class, function (Faker $faker) {

	$id_country = App\Country::pluck('id')->toArray();

    return [
        //
        'name' => $faker->word,
        'country_id' => $faker->randomElement($id_country),
    ];
});
