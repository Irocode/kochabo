<?php

class ListCurrencyTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('list_currency')->truncate();
        
		\DB::table('list_currency')->insert(array (
			0 => 
			array (
				'id' => 1,
				'bezeichnung' => 'EUR',
				'created_at' => '2014-05-30 15:03:04',
				'updated_at' => '2014-05-30 13:03:04',
			),
			1 => 
			array (
				'id' => 3,
				'bezeichnung' => 'CHF',
				'created_at' => '2014-05-30 15:03:11',
				'updated_at' => '2014-05-30 13:03:11',
			),
			2 => 
			array (
				'id' => 4,
				'bezeichnung' => 'USD',
				'created_at' => '2014-05-30 15:03:19',
				'updated_at' => '2014-05-30 13:03:19',
			),
		));
	}

}
