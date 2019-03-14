<?php

use Faker\Generator as Faker;

$factory->define(MyStoreCorner\StorePage::class, function (Faker $faker) {
  $faker = \Faker\Factory::create();

  return [
      'store_id' => MyStoreCorner\Store::all()->random()->id,
      'title' => implode(' ', $faker->words($nb = 3)),
      'slug' => $faker->unique()->slug,
      'meta_keywords' => implode(' ', $faker->words($nb = 3)),
      'meta_description' => $faker->text,
      'content' => $faker->text,
  ];
});
