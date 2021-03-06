<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
	public function __construct()
	{
		$this->table = 'currencies';
		$this->sql = base_path().'/database/seeds/sql/currencies.sql';
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		// Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		DB::table($this->table)->truncate();

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		DB::unprepared(file_get_contents($this->sql));
	}
}
