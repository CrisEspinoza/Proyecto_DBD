<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserTest;
use Faker\Generator as Faker;

$factory->define(UserTest::class, function (Faker $faker) {

    $id_user = App\User::pluck('id')->toArray();
    $id_test = App\Test::pluck('id')->toArray();
    
    return [
        'id_user' => $faker->randomElement($id_user),
        'id_test' => $faker->randomElement($id_test),
    ];
});
