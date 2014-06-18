<?php

class SettingsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('settings')->truncate();
        
		\DB::table('settings')->insert(array (
			0 => 
			array (
				'id' => 1,
				'site_title' => 'Kochabo',
				'ga_code' => 'ga_code',
				'meta_keywords' => 'meta_keywords',
				'meta_description' => 'meta_description',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '2014-04-03 16:19:27',
			),
		));
	}

}
