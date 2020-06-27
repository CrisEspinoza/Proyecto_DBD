<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commentary;
use Faker\Generator as Faker;

$factory->define(Commentary::class, function (Faker $faker) {


	$user_id = App\User::pluck('id')->toArray();
	$test_id = App\Test::pluck('id')->toArray();

    return [
        'name' => $faker->word,
        'user_id' => $faker->randomElement($user_id),
        'test_id' => $faker->randomElement($test_id),
    ];
});
