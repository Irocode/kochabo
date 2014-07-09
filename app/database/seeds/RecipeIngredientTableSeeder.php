<?php

class RecipeIngredientTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('recipe_ingredient')->truncate();
        
		\DB::table('recipe_ingredient')->insert(array (
			0 => 
			array (
				'recipe_id' => 1,
				'ingredient_id' => 1,
				'delivery' => 1,
				'amount_2_persons' => 0,
				'amount_4_persons' => 1,
				'amount_6_persons' => 0,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'is_published' => 0,
			),
		));
	}

}
