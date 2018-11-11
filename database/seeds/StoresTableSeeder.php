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
		for($i=0; $i<1000; $i++){
			DB::table('stores')->insert([
				'country_id' => 1,
				'state_id' => 1,
				'postcode_id' => 1,
				'slug' => str_random(10),
				'username' => str_random(10),
				'email' => str_random(10).'@gmail.com',
				'password' => bcrypt('secret'),
				'name' => str_random(10),
				'business_registration_number' => str_random(10),
				'address' => str_random(10),
			]);
		}
	}
}
