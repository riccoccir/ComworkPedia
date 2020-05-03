<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TrCommission;
use Faker\Generator as Faker;

$factory->define(TrCommission::class, function (Faker $faker) {
    return [
        'commission_type_id' => $faker->numberBetween($min = 1, $max = 6),
        'commission_name' => $faker->jobTitle(),
        'commission_description' => $faker->paragraph($nbSentences = 1, $variableNbSenteces = true),
        'slot_available' => $faker->numberBetween($min = 0 , $max = 10),
        'commission_price' => $faker->biasedNumberBetween($min = 50000, $max = 150000, $function = 'sqrt'),
        'commission_duration' => $faker->dateTime($max = 'now', $timezone = null),
        'commission_image' => $faker->imageUrl($width = 640 ,$height =480,'cats')
    ];
});