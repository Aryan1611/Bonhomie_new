<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Gym;
use Illuminate\Support\Facades\Hash;

use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'cname' => $faker->name,
        'ccity' => $faker->city,
        'cphone' => $faker->unique()->numberBetween(200000,900000),
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('12345678'),
        'gender' => $faker->randomElement($array = array ('Male', 'Female')) ,
        
        'gid' => function(){
            return Gym::all()->random();
        },
    ];
});
