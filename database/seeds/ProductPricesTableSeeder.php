<?php

use Illuminate\Database\Seeder;

class ProductPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MyStoreCorner\ProductPrice::class, 100)->create()->each(function($s) {
            ;
        });
    }
}
