<?php

use Illuminate\Database\Seeder;

class StorePagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(MyStoreCorner\StorePage::class, 10)->create()->each(function($s) {
          ;
      });
    }
}
