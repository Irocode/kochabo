<?php

class OrderTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('order')->truncate();
        
		\DB::table('order')->insert(array (
			0 => 
			array (
				'order_id' => 1,
				'delivery_date' => '2014-06-25',
				'order_increment_id' => 1,
				'deliverable' => 1,
				'customercustomer_id' => 112,
				'created_at' => '2014-06-18 00:00:00',
				'updated_at' => '2014-06-20 00:00:00',
			),
			1 => 
			array (
				'order_id' => 61,
				'delivery_date' => '0000-00-00',
				'order_increment_id' => 7060,
				'deliverable' => 0,
				'customercustomer_id' => 0,
				'created_at' => '2014-05-09 12:54:13',
				'updated_at' => '2014-06-15 07:15:06',
			),
			2 => 
			array (
				'order_id' => 65,
				'delivery_date' => '0000-00-00',
				'order_increment_id' => 5050,
				'deliverable' => 0,
				'customercustomer_id' => 0,
				'created_at' => '2014-05-09 22:27:44',
				'updated_at' => '2014-05-23 12:21:35',
			),
			3 => 
			array (
				'order_id' => 85,
				'delivery_date' => '0000-00-00',
				'order_increment_id' => 6060,
				'deliverable' => 0,
				'customercustomer_id' => 0,
				'created_at' => '2014-05-16 19:09:51',
				'updated_at' => '2014-05-16 19:09:51',
			),
			4 => 
			array (
				'order_id' => 86,
				'delivery_date' => '0000-00-00',
				'order_increment_id' => 6666,
				'deliverable' => 0,
				'customercustomer_id' => 0,
				'created_at' => '2014-05-23 06:12:17',
				'updated_at' => '2014-05-23 06:12:17',
			),
			5 => 
			array (
				'order_id' => 87,
				'delivery_date' => '0000-00-00',
				'order_increment_id' => 5654,
				'deliverable' => 0,
				'customercustomer_id' => 0,
				'created_at' => '2014-05-23 06:12:24',
				'updated_at' => '2014-05-23 12:26:48',
			),
		));
	}

}
