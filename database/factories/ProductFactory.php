<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
	$faker = \Faker\Factory::create();
	$faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
	$productName = $faker->productName;

    return [
        'name' => $productName,
        'short_name' => $productName,
        'sku_number' => $faker->numberBetween(1000,9999),
    ];
});
