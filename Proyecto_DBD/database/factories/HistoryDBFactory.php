<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HistoryDB;
use Faker\Generator as Faker;

$factory->define(HistoryDB::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
    ];
});
