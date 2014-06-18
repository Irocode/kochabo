<?php

class TagsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tags')->truncate();
        
		\DB::table('tags')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Rezept',
				'slug' => 'rezept',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Zubereitung',
				'slug' => 'zubereitung',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Feinkost',
				'slug' => 'feinkost',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Fischgericht',
				'slug' => 'fischgericht',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'MongoDB',
				'slug' => 'mongodb',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			5 => 
			array (
				'id' => 6,
				'name' => 'Kalorienarm',
				'slug' => 'kalorienarm',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			6 => 
			array (
				'id' => 7,
				'name' => 'Vitamine',
				'slug' => 'vitamine',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			7 => 
			array (
				'id' => 8,
				'name' => 'Alkoholisch',
				'slug' => 'alkoholisch',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			8 => 
			array (
				'id' => 9,
				'name' => 'Getränk',
				'slug' => 'getränk',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			9 => 
			array (
				'id' => 10,
				'name' => 'Cocktail',
				'slug' => 'cocktail',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			10 => 
			array (
				'id' => 11,
				'name' => 'MongoDB f',
				'slug' => 'mongodb-f',
				'created_at' => '2014-05-06 18:08:45',
				'updated_at' => '2014-05-06 18:08:45',
			),
		));
	}

}
