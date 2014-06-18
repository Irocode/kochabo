<?php

class DeliverytimesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('deliverytimes')->truncate();
        
		\DB::table('deliverytimes')->insert(array (
			0 => 
			array (
				'id' => 278,
				'user_id' => 186,
				'name' => 'Lieferzeit 2',
				'delivery_time_from' => '13:30',
				'delivery_time_to' => '15:30',
				'nightjump' => '0',
				'created_at' => '2014-05-08 15:01:01',
				'updated_at' => '2014-05-09 16:15:50',
				'is_published' => '0',
			),
			1 => 
			array (
				'id' => 294,
				'user_id' => 0,
				'name' => 'asdfsd',
				'delivery_time_from' => '',
				'delivery_time_to' => '',
				'nightjump' => '',
				'created_at' => '2014-05-10 13:16:17',
				'updated_at' => '2014-05-10 13:16:53',
				'is_published' => '0',
			),
			2 => 
			array (
				'id' => 296,
				'user_id' => 171,
				'name' => 'sdafasdf',
				'delivery_time_from' => '10',
				'delivery_time_to' => '',
				'nightjump' => '',
				'created_at' => '2014-05-11 19:23:39',
				'updated_at' => '2014-05-11 19:36:27',
				'is_published' => '0',
			),
			3 => 
			array (
				'id' => 297,
				'user_id' => 187,
				'name' => 'aaanb',
				'delivery_time_from' => '',
				'delivery_time_to' => '',
				'nightjump' => '',
				'created_at' => '2014-05-12 00:11:51',
				'updated_at' => '2014-05-23 05:51:53',
				'is_published' => '0',
			),
			4 => 
			array (
				'id' => 298,
				'user_id' => 204,
				'name' => 'sdafsaf',
				'delivery_time_from' => '',
				'delivery_time_to' => '',
				'nightjump' => '',
				'created_at' => '2014-06-10 11:32:11',
				'updated_at' => '2014-06-10 11:32:11',
				'is_published' => '0',
			),
			5 => 
			array (
				'id' => 299,
				'user_id' => 204,
				'name' => 'ffff',
				'delivery_time_from' => '',
				'delivery_time_to' => '',
				'nightjump' => '',
				'created_at' => '2014-06-10 11:37:02',
				'updated_at' => '2014-06-10 11:37:02',
				'is_published' => '0',
			),
			6 => 
			array (
				'id' => 300,
				'user_id' => 204,
				'name' => '10',
				'delivery_time_from' => '',
				'delivery_time_to' => '',
				'nightjump' => '',
				'created_at' => '2014-06-15 07:14:40',
				'updated_at' => '2014-06-15 07:14:40',
				'is_published' => '0',
			),
		));
	}

}
