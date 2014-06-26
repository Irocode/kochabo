<?php

class OrderStatusHistoryTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('order_status_history')->truncate();
        
		\DB::table('order_status_history')->insert(array (
			0 => 
			array (
				'order_status_history_id' => 0,
				'orderorder_id' => 1,
				'status' => 'mein status',
				'channel' => 'channel x',
				'operator' => '',
				'timestamp' => '2014-06-26 12:55:57',
				'created_at' => '0000-00-00',
				'updated_at' => '0000-00-00',
			),
		));
	}

}
