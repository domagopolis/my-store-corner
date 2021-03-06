<?php

use Faker\Generator as Faker;

$factory->define(MyStoreCorner\Product::class, function (Faker $faker) {
    $faker = \Faker\Factory::create();
    $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
    $productName = $faker->productName;

    return [
        'store_id' => MyStoreCorner\Store::all()->random()->id,
        'name' => $productName,
        'short_name' => $productName,
        'sku_number' => $faker->numberBetween(1000,9999),
    ];
});
