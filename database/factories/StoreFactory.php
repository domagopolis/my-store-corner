<?php

use Faker\Generator as Faker;

$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'postcode_id' => App\Postcode::all()->random()->id,
        'username' => $faker->userName,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'name' => $faker->company,
        'slug' => $faker->slug,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'mobile' => $faker->phoneNumber,
        'address' => $faker->address,
        'business_registration_number' => $faker->randomNumber,
        'website' => 'https://www.'.$faker->domainName,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'payed_member' => 1,
    ];
});
