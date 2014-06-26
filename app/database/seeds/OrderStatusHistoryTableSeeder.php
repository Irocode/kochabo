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
        
	}

}
