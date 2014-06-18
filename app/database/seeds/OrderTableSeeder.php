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
				'id' => 1,
				'delivery_date' => '2014-06-10',
				'order_increment_id' => 0,
				'deliverable' => 1,
				'customercustomer_id' => 44,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'order_id' => 13330,
				'is_published' => 0,
				'slug' => '',
			),
			1 => 
			array (
				'id' => 2,
				'delivery_date' => '2014-06-10',
				'order_increment_id' => 0,
				'deliverable' => 1,
				'customercustomer_id' => 44,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'order_id' => 88,
				'is_published' => 0,
				'slug' => '',
			),
			2 => 
			array (
				'id' => 3,
				'delivery_date' => '2014-06-11',
				'order_increment_id' => 0,
				'deliverable' => 0,
				'customercustomer_id' => 3,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'order_id' => 4711,
				'is_published' => 0,
				'slug' => '',
			),
			3 => 
			array (
				'id' => 4,
				'delivery_date' => '0000-00-00',
				'order_increment_id' => 0,
				'deliverable' => 0,
				'customercustomer_id' => 72,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'order_id' => 8800,
				'is_published' => 0,
				'slug' => '',
			),
		));
	}

}
