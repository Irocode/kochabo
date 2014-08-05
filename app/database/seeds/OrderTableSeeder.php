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
				'order_id' => 100,
				'delivery_date' => '2014-08-05',
				'order_increment_id' => 100,
				'deliverable' => 1,
				'customercustomer_id' => 179,
				'created_at' => '2014-08-05 00:00:00',
				'updated_at' => '2014-08-05 00:00:00',
			),
		));
	}

}
