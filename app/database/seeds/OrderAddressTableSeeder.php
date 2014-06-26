<?php

class OrderAddressTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('order_address')->truncate();
        
		\DB::table('order_address')->insert(array (
			0 => 
			array (
				'address_id' => 1,
				'orderorder_id' => 1,
				'address_type' => '',
				'gender' => 'Herr',
				'first_name' => 'Tom',
				'last_name' => '',
				'street' => '',
				'city' => '',
				'country' => '',
				'stateprovince' => '',
				'zip' => 0,
				'housenumber' => '',
				'stairway_number' => '',
				'floor' => '',
				'appartement_number' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'delivery_information' => NULL,
			),
			1 => 
			array (
				'address_id' => 2,
				'orderorder_id' => 1,
				'address_type' => '',
				'gender' => 'Herr',
				'first_name' => 'Tom',
				'last_name' => '',
				'street' => '',
				'city' => '',
				'country' => '',
				'stateprovince' => '',
				'zip' => 0,
				'housenumber' => '',
				'stairway_number' => '',
				'floor' => '',
				'appartement_number' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'delivery_information' => NULL,
			),
		));
	}

}
