<?php

class ListJaneinTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('List_Janein')->truncate();
        
		\DB::table('List_Janein')->insert(array (
			0 => 
			array (
				'id' => 1,
				'bezeichnung' => 'Ja',
				'wert' => '1',
				'created_at' => '2014-05-30 14:59:34',
				'updated_at' => '2014-05-30 12:59:34',
			),
			1 => 
			array (
				'id' => 2,
				'bezeichnung' => 'Nein',
				'wert' => '0',
				'created_at' => '2014-05-30 14:59:54',
				'updated_at' => '2014-05-30 12:59:54',
			),
		));
	}

}
