<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\user;
use App\UserDomicilio;

$factory->define(UserDomicilio::class, function (Faker $faker) {
    return [
        //
        'user_id' => App\User::inRandomOrder()->first()->id,
        'domicilio' => $faker->address,
        'numero_exterior' => $faker->randomDigit,
        'colonia' => $faker->sentence(2,false),
        'cp' => $faker->randomDigit,
        'ciudad' => $faker->country,
    ];
});
