<?php

class CategoriesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('categories')->truncate();
        
		\DB::table('categories')->insert(array (
			0 => 
			array (
				'id' => 2,
				'title' => 'Gemüse',
			),
			1 => 
			array (
				'id' => 3,
				'title' => 'Vegetarisch',
			),
			2 => 
			array (
				'id' => 4,
				'title' => 'Pflanzlich',
			),
			3 => 
			array (
				'id' => 5,
				'title' => 'Rohkost',
			),
			4 => 
			array (
				'id' => 10,
				'title' => 'Süßigkeiten',
			),
		));
	}

}
