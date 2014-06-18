<?php

class ListUstTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('list_ust')->truncate();
        
		\DB::table('list_ust')->insert(array (
			0 => 
			array (
				'id' => 1,
				'bezeichnung' => '20',
				'created_at' => '2014-05-30 14:59:34',
				'updated_at' => '2014-05-30 12:59:34',
			),
			1 => 
			array (
				'id' => 3,
				'bezeichnung' => '19',
				'created_at' => '2014-05-30 14:59:54',
				'updated_at' => '2014-05-30 12:59:54',
			),
			2 => 
			array (
				'id' => 7,
				'bezeichnung' => '2,5',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'id' => 8,
				'bezeichnung' => '8',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
