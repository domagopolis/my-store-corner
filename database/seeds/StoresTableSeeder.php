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
		factory(App\Store::class, 100)->create()->each(function($wps) {
            ;
        });
	}
}
