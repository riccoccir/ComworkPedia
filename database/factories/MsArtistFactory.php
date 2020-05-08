<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MsArtist;
use Faker\Generator as Faker;

$factory->define(MsArtist::class, function (Faker $faker) {
    return [
        'artist_name'=> $faker->firstname(),
        'artist_email' => $faker->email(),
        'artist_password'=> $faker->password(),
        'artist_phoneNumber' => $faker->phoneNumber(),
        'artist_instagram'=> $faker->userName(),
        'artist_webiste' => $faker->domainName(),
        'bank_name'=> $faker->company(),
        'bank_account_number'=> $faker->bankAccountNumber(),
        'account_ownership'=>$faker->lastname()
    ];
});
