<?php

class ListRecipeTypeTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('list_recipe_type')->truncate();
        
		\DB::table('list_recipe_type')->insert(array (
			0 => 
			array (
				'id' => 1,
				'bezeichnung' => 'Classic',
				'created_at' => '2014-05-30 14:59:34',
				'updated_at' => '2014-05-30 12:59:34',
			),
			1 => 
			array (
				'id' => 3,
				'bezeichnung' => 'Veggie ',
				'created_at' => '2014-05-30 14:59:54',
				'updated_at' => '2014-05-30 12:59:54',
			),
			2 => 
			array (
				'id' => 4,
				'bezeichnung' => 'Vegan',
				'created_at' => '2014-05-30 15:00:31',
				'updated_at' => '2014-05-30 13:00:31',
			),
		));
	}

}
