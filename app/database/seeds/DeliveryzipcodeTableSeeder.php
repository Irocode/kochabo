<?php

class DeliveryzipcodeTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('deliveryzipcode')->truncate();
        
		\DB::table('deliveryzipcode')->insert(array (
			0 => 
			array (
				'id' => 61,
				'user_id' => 204,
				'zip' => 7060,
				'is_published' => 0,
				'created_at' => '2014-05-09 12:54:13',
				'updated_at' => '2014-06-15 07:15:06',
			),
			1 => 
			array (
				'id' => 65,
				'user_id' => 187,
				'zip' => 5050,
				'is_published' => 0,
				'created_at' => '2014-05-09 22:27:44',
				'updated_at' => '2014-05-23 12:21:35',
			),
			2 => 
			array (
				'id' => 85,
				'user_id' => 10,
				'zip' => 6060,
				'is_published' => 0,
				'created_at' => '2014-05-16 19:09:51',
				'updated_at' => '2014-05-16 19:09:51',
			),
			3 => 
			array (
				'id' => 86,
				'user_id' => 10,
				'zip' => 6666,
				'is_published' => 0,
				'created_at' => '2014-05-23 06:12:17',
				'updated_at' => '2014-05-23 06:12:17',
			),
			4 => 
			array (
				'id' => 87,
				'user_id' => 187,
				'zip' => 5654,
				'is_published' => 0,
				'created_at' => '2014-05-23 06:12:24',
				'updated_at' => '2014-05-23 12:26:48',
			),
		));
	}

}
