<?php

use Faker\Generator as Faker;

$factory->define(MyStoreCorner\ProductPrice::class, function (Faker $faker) {
    return [
        'product_id' => MyStoreCorner\Product::all()->random()->id,
        'currency_id' => MyStoreCorner\Currency::all()->random()->id,
        'price' => $faker->randomFloat(2, 0, 999.99),
    ];
});
