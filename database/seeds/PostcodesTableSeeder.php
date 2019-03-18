<?php

use Illuminate\Database\Seeder;

class PostcodesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(MyStoreCorner\Postcode::class, 1000)->create()->each(function($s) {
            ;
        });
    }
}
