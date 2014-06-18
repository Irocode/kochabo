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
		));
	}

}
