<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		factory(MyStoreCorner\Store::class, 100)->create()->each(function($s) {
        	$s->trades()->sync(MyStoreCorner\Trade::inRandomOrder()->limit(3)->get());
    	});
	}
}
