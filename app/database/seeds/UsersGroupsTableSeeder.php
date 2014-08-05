<?php

class UsersGroupsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users_groups')->truncate();
        
		\DB::table('users_groups')->insert(array (
			0 => 
			array (
				'user_id' => 1,
				'group_id' => 1,
			),
			1 => 
			array (
				'user_id' => 1,
				'group_id' => 2,
			),
			2 => 
			array (
				'user_id' => 2,
				'group_id' => 1,
			),
			3 => 
			array (
				'user_id' => 2,
				'group_id' => 2,
			),
			4 => 
			array (
				'user_id' => 3,
				'group_id' => 2,
			),
			5 => 
			array (
				'user_id' => 61,
				'group_id' => 2,
			),
			6 => 
			array (
				'user_id' => 72,
				'group_id' => 2,
			),
			7 => 
			array (
				'user_id' => 85,
				'group_id' => 1,
			),
			8 => 
			array (
				'user_id' => 113,
				'group_id' => 2,
			),
			9 => 
			array (
				'user_id' => 118,
				'group_id' => 1,
			),
			10 => 
			array (
				'user_id' => 119,
				'group_id' => 1,
			),
			11 => 
			array (
				'user_id' => 120,
				'group_id' => 1,
			),
			12 => 
			array (
				'user_id' => 122,
				'group_id' => 1,
			),
			13 => 
			array (
				'user_id' => 125,
				'group_id' => 1,
			),
			14 => 
			array (
				'user_id' => 126,
				'group_id' => 1,
			),
			15 => 
			array (
				'user_id' => 175,
				'group_id' => 1,
			),
		));
	}

}
