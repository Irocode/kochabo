<?php

class ListGenderTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('list_gender')->truncate();
        
		\DB::table('list_gender')->insert(array (
			0 => 
			array (
				'id' => 1,
				'bezeichnung' => '',
				'created_at' => '2014-05-30 14:59:34',
				'updated_at' => '2014-05-30 12:59:34',
			),
			1 => 
			array (
				'id' => 2,
				'bezeichnung' => 'Herr',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'id' => 3,
				'bezeichnung' => 'Frau',
				'created_at' => '2014-05-30 14:59:54',
				'updated_at' => '2014-05-30 12:59:54',
			),
		));
	}

}
