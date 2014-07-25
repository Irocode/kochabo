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
				'id' => 46,
				'ingredient_id' => 6,
				'recipe_id' => 2,
				'delivery' => 1,
				'amount_2_persons' => 0,
				'amount_4_persons' => 0,
				'amount_6_persons' => 0,
				'einheit' => '',
				'created_at' => '2014-07-25 05:51:23',
				'updated_at' => '2014-07-25 06:15:45',
				'is_published' => 0,
			),
			1 => 
			array (
				'id' => 49,
				'ingredient_id' => 8,
				'recipe_id' => 2,
				'delivery' => 1,
				'amount_2_persons' => 1,
				'amount_4_persons' => 2,
				'amount_6_persons' => 3,
				'einheit' => 'g',
				'created_at' => '2014-07-25 06:02:48',
				'updated_at' => '2014-07-25 06:02:48',
				'is_published' => 0,
			),
			2 => 
			array (
				'id' => 51,
				'ingredient_id' => 5,
				'recipe_id' => 4,
				'delivery' => 1,
				'amount_2_persons' => 1,
				'amount_4_persons' => 2,
				'amount_6_persons' => 3,
				'einheit' => 'Liter',
				'created_at' => '2014-07-25 07:07:54',
				'updated_at' => '2014-07-25 07:07:54',
				'is_published' => 0,
			),
			3 => 
			array (
				'id' => 52,
				'ingredient_id' => 6,
				'recipe_id' => 5,
				'delivery' => 0,
				'amount_2_persons' => 0,
				'amount_4_persons' => 0,
				'amount_6_persons' => 0,
				'einheit' => '',
				'created_at' => '2014-07-25 07:10:27',
				'updated_at' => '2014-07-25 07:10:27',
				'is_published' => 0,
			),
		));
	}

}
