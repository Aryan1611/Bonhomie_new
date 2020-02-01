<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trainer;
use App\Gym;
use Illuminate\Support\Facades\Hash;

use Faker\Generator as Faker;

$factory->define(Trainer::class, function (Faker $faker) {
    return [
        'tname' => $faker->name,
        'tcity' => $faker->city,
        'tphone' => $faker->unique()->numberBetween(200000,900000),
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('12345678'),
        'gender' => $faker->randomElement($array = array ('Male', 'Female')) ,
        
        'gid' => function(){
            return Gym::all()->random();
        },
    ];
});
