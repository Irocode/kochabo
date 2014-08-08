<?php

class CalendarweekrecipestrukturTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('calendarweekrecipestruktur')->truncate();
        
		\DB::table('calendarweekrecipestruktur')->insert(array (
			0 => 
			array (
				'packetid' => 1,
				'recipeid' => 90,
				'sorting' => 1,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'is_published' => 0,
			),
		));
	}

}
