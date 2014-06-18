<?php

class SlidersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('sliders')->truncate();
        
		\DB::table('sliders')->insert(array (
			0 => 
			array (
				'id' => 1,
				'title' => 'Slider',
				'type' => 'home',
				'created_at' => '2014-04-01 21:08:10',
				'updated_at' => '2014-04-01 21:08:10',
			),
		));
	}

}
