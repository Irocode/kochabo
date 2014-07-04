<?php

class CustomersGroupsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('customers_groups')->truncate();
        
		\DB::table('customers_groups')->insert(array (
			0 => 
			array (
				'customers_groups_id' => 3,
				'groupname' => 'Gruppe A',
				'default' => 0,
				'created_at' => '2014-04-19 04:02:36',
				'updated_at' => '2014-05-04 13:56:55',
			),
			1 => 
			array (
				'customers_groups_id' => 171,
				'groupname' => 'Gruppe B',
				'default' => 0,
				'created_at' => '2014-05-04 17:59:17',
				'updated_at' => '2014-05-04 18:48:31',
			),
		));
	}

}
