<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MyStoreCorner\Product::class, 100)->create()->each(function($p) {
            $p->prices()->saveMany(factory(MyStoreCorner\ProductPrice::class, 3)->make());
        });
    }
}
