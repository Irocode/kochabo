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
				'id' => 0,
				'ingredient_id' => 0,
				'recipe_id' => 0,
				'delivery' => 0,
				'amount_2_persons' => 0,
				'amount_4_persons' => 0,
				'amount_6_persons' => 0,
				'created_at' => '2014-07-22 07:50:29',
				'updated_at' => '2014-07-22 07:50:29',
				'is_published' => 0,
			),
			1 => 
			array (
				'id' => 2,
				'ingredient_id' => 3,
				'recipe_id' => 1,
				'delivery' => 1,
				'amount_2_persons' => 80,
				'amount_4_persons' => 100,
				'amount_6_persons' => 200,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'is_published' => 0,
			),
			2 => 
			array (
				'id' => 3,
				'ingredient_id' => 2,
				'recipe_id' => 0,
				'delivery' => 1,
				'amount_2_persons' => 200,
				'amount_4_persons' => 300,
				'amount_6_persons' => 400,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'is_published' => 0,
			),
			3 => 
			array (
				'id' => 28,
				'ingredient_id' => 1,
				'recipe_id' => 28,
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
