<?php

class GroupsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('groups')->truncate();
        
		\DB::table('groups')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Users',
				'permissions' => '{"users":1}',
				'created_at' => '2014-04-17 16:56:15',
				'updated_at' => '2014-04-17 16:56:15',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Admins',
				'permissions' => '{"admin":1,"users":1}',
				'created_at' => '2014-04-17 16:56:15',
				'updated_at' => '2014-04-17 16:56:15',
			),
		));
	}

}
