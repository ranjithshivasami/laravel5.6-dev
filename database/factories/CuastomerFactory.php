<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'address' => $faker->address,
        'postalcode' => $faker->postcode,
        'city' => $faker->city,        
    ];
});
