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
				'order_status_history_id' => 199,
				'orderorder_id' => 100,
				'status' => 'mein status',
				'channel' => 'channel y',
				'operator' => '',
				'timestamp' => '2014-08-05 07:54:46',
				'created_at' => '2014-08-05',
				'updated_at' => '2014-08-05',
			),
			1 => 
			array (
				'order_status_history_id' => 200,
				'orderorder_id' => 100,
				'status' => 'mein status',
				'channel' => 'channel x',
				'operator' => '',
				'timestamp' => '2014-08-05 07:54:57',
				'created_at' => '2014-08-03',
				'updated_at' => '2014-08-03',
			),
		));
	}

}
