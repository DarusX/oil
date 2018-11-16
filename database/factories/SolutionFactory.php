<?php

use Faker\Generator as Faker;

$factory->define(App\Solution::class, function (Faker $faker) {
    return [
        'solution' => $faker->sentence(),
        'description' => $faker->text()
    ];
});
