<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    $tickers = ['GOOG','AMZN','TSLA','AAPL','NFLX','FB'];
    return [
        'name' => $faker->company,
        'ticker' => $faker->unique()->randomElement($tickers),
        'address' => $faker->address,
        'sector' => $faker->word(),
        'industry' => $faker->word(),
        'phone' => $faker->phoneNumber,
        'website' => $faker->url,
        'description' => $faker->paragraph(),
    ];
});
