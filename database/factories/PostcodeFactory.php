<?php

use Faker\Generator as Faker;

$factory->define(MyStoreCorner\Postcode::class, function (Faker $faker) {
	$faker = \Faker\Factory::create();

    return [
		'state_id' => MyStoreCorner\State::all()->random()->id,
		'postal_code' => $faker->postcode,
        'name' => $faker->city,
		'slug' => $faker->unique()->slug,
		'latitude' => $faker->latitude,
		'longitude' => $faker->longitude,
    ];
});
