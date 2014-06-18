<?php

class ListBundeslandTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('list_bundesland')->truncate();
        
		\DB::table('list_bundesland')->insert(array (
			0 => 
			array (
				'id' => 1,
				'bezeichnung' => 'Wien',
				'created_at' => '2014-05-30 15:03:04',
				'updated_at' => '2014-05-30 13:03:04',
			),
			1 => 
			array (
				'id' => 3,
				'bezeichnung' => 'Niederösterreich',
				'created_at' => '2014-05-30 15:03:11',
				'updated_at' => '2014-05-30 13:03:11',
			),
			2 => 
			array (
				'id' => 4,
				'bezeichnung' => 'Kärnten',
				'created_at' => '2014-05-30 15:03:19',
				'updated_at' => '2014-05-30 13:03:19',
			),
			3 => 
			array (
				'id' => 5,
				'bezeichnung' => 'Salzburg',
				'created_at' => '2014-05-30 15:03:26',
				'updated_at' => '2014-05-30 13:03:26',
			),
			4 => 
			array (
				'id' => 6,
				'bezeichnung' => 'Tirol',
				'created_at' => '2014-05-30 15:03:40',
				'updated_at' => '2014-05-30 13:03:40',
			),
			5 => 
			array (
				'id' => 7,
				'bezeichnung' => 'Steiermark',
				'created_at' => '2014-05-30 15:03:48',
				'updated_at' => '2014-05-30 13:03:48',
			),
			6 => 
			array (
				'id' => 8,
				'bezeichnung' => 'dfdaf',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
