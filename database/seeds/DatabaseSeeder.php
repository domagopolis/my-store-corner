<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
			UsersTableSeeder::class,
			CountriesTableSeeder::class,
			StatesTableSeeder::class,
			PostcodesTableSeeder::class,
			CurrenciesTableSeeder::class,
			TradesTableSeeder::class,
			StoresTableSeeder::class,
		]);
    }
}
