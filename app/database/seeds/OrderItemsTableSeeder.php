<?php

class OrderItemsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('order_items')->truncate();
        
		\DB::table('order_items')->insert(array (
			0 => 
			array (
				'order_items_id' => 200,
				'orderorder_id' => 100,
				'product_id' => 2020,
				'product_sku' => '',
				'product_name' => 'ObstBox',
				'original_price_net' => '0.00',
				'ust' => '0.00',
				'discount' => '0.00',
				'affilate_discount' => '0.00',
				'affilate_credit' => '0.00',
				'giftvoucher_credit' => '0.00',
				'coupon_code' => '',
				'giftvoucher_code' => '',
				'affilate_code' => '',
				'quantity' => 0,
				'timestamp' => '2014-08-05 07:52:43',
				'created_at' => '0000-00-00',
				'updated_at' => '0000-00-00',
			),
		));
	}

}
