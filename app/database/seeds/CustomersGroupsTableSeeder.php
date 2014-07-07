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
				'customers_groups_id' => 1,
				'groupname' => 'Allianz',
				'default' => 0,
				'created_at' => '2014-04-19 04:02:36',
				'updated_at' => '2014-05-04 13:56:55',
			),
			1 => 
			array (
				'customers_groups_id' => 2,
				'groupname' => 'Deleted',
				'default' => 0,
				'created_at' => '2014-07-04 14:23:41',
				'updated_at' => '2014-07-04 14:23:41',
			),
			2 => 
			array (
				'customers_groups_id' => 3,
				'groupname' => 'Existing Customers',
				'default' => 0,
				'created_at' => '2014-07-07 05:52:11',
				'updated_at' => '2014-07-07 05:52:11',
			),
			3 => 
			array (
				'customers_groups_id' => 4,
				'groupname' => 'General',
				'default' => 0,
				'created_at' => '2014-07-07 06:02:35',
				'updated_at' => '2014-07-07 06:02:35',
			),
			4 => 
			array (
				'customers_groups_id' => 5,
				'groupname' => 'Gesperrt',
				'default' => 0,
				'created_at' => '2014-07-07 06:18:46',
				'updated_at' => '2014-07-07 06:18:46',
			),
			5 => 
			array (
				'customers_groups_id' => 6,
				'groupname' => 'keine E-Mails',
				'default' => 1,
				'created_at' => '2014-07-07 06:21:25',
				'updated_at' => '2014-07-07 06:21:25',
			),
			6 => 
			array (
				'customers_groups_id' => 7,
				'groupname' => 'Retailer',
				'default' => 1,
				'created_at' => '2014-07-07 06:36:18',
				'updated_at' => '2014-07-07 06:36:18',
			),
			7 => 
			array (
				'customers_groups_id' => 8,
				'groupname' => 'TopCustomer',
				'default' => 0,
				'created_at' => '2014-07-07 10:08:00',
				'updated_at' => '2014-07-07 10:08:00',
			),
			8 => 
			array (
				'customers_groups_id' => 9,
				'groupname' => 'Wholesale',
				'default' => 0,
				'created_at' => '2014-07-07 10:08:00',
				'updated_at' => '2014-07-07 10:08:00',
			),
			9 => 
			array (
				'customers_groups_id' => 10,
				'groupname' => 'TopCustomer',
				'default' => 0,
				'created_at' => '2014-07-07 10:08:00',
				'updated_at' => '2014-07-07 10:08:00',
			),
			10 => 
			array (
				'customers_groups_id' => 11,
				'groupname' => 'Wholesale',
				'default' => 0,
				'created_at' => '2014-07-07 10:08:00',
				'updated_at' => '2014-07-07 10:08:00',
			),
		));
	}

}
