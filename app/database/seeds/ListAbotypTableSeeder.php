<?php

class ListAbotypTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('list_abotyp')->truncate();
        
		\DB::table('list_abotyp')->insert(array (
			0 => 
			array (
				'id' => 1,
				'bezeichnung' => 'Einmalig',
				'created_at' => '2014-05-30 14:59:34',
				'updated_at' => '2014-05-30 12:59:34',
			),
			1 => 
			array (
				'id' => 3,
				'bezeichnung' => 'Einwöchig ',
				'created_at' => '2014-05-30 14:59:54',
				'updated_at' => '2014-05-30 12:59:54',
			),
			2 => 
			array (
				'id' => 4,
				'bezeichnung' => 'Zweiwöchig',
				'created_at' => '2014-05-30 15:00:31',
				'updated_at' => '2014-05-30 13:00:31',
			),
			3 => 
			array (
				'id' => 5,
				'bezeichnung' => 'Vierwöchig',
				'created_at' => '2014-05-30 15:01:09',
				'updated_at' => '2014-05-30 13:01:09',
			),
			4 => 
			array (
				'id' => 6,
				'bezeichnung' => 'Kein Abo',
				'created_at' => '2014-05-30 15:00:59',
				'updated_at' => '2014-05-30 13:00:59',
			),
		));
	}

}
