<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MsClient;
use Faker\Generator as Faker;

$factory->define(MsClient::class, function (Faker $faker) {
    
    return [
        'client_name' => $faker->firstName(),
        'client_email' => $faker->email(),
        'client_password' => $faker->password(),
        'client_phoneNumber' => $faker->phoneNumber()
    ];
});
