<?php

class CalendarweekTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('calendarweek')->truncate();
        
		\DB::table('calendarweek')->insert(array (
			0 => 
			array (
				'packetid' => 1,
				'calendarweek' => '32',
				'year' => '2014',
				'modifydate' => '',
				'type' => '',
				'recipeflyerur' => '',
				'recipeflyerursingle' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'is_published' => 0,
			),
		));
	}

}
