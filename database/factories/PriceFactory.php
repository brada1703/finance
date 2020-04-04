<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Price;
use Faker\Generator as Faker;

$factory->define(Price::class, function (Faker $faker) {
    $companies = ['GOOG','AMZN','TSLA','AAPL','NFLX','FB'];
    $high = $faker->randomFloat(2, 1000, 1050);
    $low = $high - $faker->randomFloat(2, 10, 20);
    $change = $high - $low;
    return [
        'ticker' => $faker->randomElement($companies),
        'high' => $high,
        'low' => $low,
        'open' => $high - $faker->randomFloat(2, -50, 50),
        'close' => $high - $faker->randomFloat(2, -50, 50),
        'volume' => $faker->randomNumber(9),
        'change' => $change,
        'changepct' => $change / 100
    ];
});
