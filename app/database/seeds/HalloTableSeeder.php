<?php

class HalloTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('hallo')->truncate();
        
		\DB::table('hallo')->insert(array (
			0 => 
			array (
				'id' => 11,
				
			),

		));
	}

}
