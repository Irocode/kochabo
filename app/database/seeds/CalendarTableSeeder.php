<?php

class CalendarTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('calendar')->truncate();
        
		\DB::table('calendar')->insert(array (
			0 => 
			array (
				'id' => 8,
				'timestamp' => '2014-05-23 09:45:03',
				'start' => '2014-04-10',
				'end' => '2014-04-10',
				'title' => 'Liefertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '2014-05-23 07:43:17',
			),
			1 => 
			array (
				'id' => 9,
				'timestamp' => '2014-05-23 11:42:36',
				'start' => '2014-05-05',
				'end' => '0000-00-00',
				'title' => 'Liefertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '2014-05-23 09:42:36',
			),
			2 => 
			array (
				'id' => 10,
				'timestamp' => '2014-05-17 11:03:22',
				'start' => '2014-04-09',
				'end' => '2014-04-09',
				'title' => 'Liefertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'id' => 11,
				'timestamp' => '2014-05-17 11:03:31',
				'start' => '2014-04-16',
				'end' => '2014-04-16',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'id' => 12,
				'timestamp' => '2014-05-17 11:06:46',
				'start' => '2014-04-02',
				'end' => '2014-04-02',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			5 => 
			array (
				'id' => 13,
				'timestamp' => '2014-05-17 11:19:49',
				'start' => '2014-04-01',
				'end' => '2014-04-01',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			6 => 
			array (
				'id' => 14,
				'timestamp' => '2014-05-17 11:24:44',
				'start' => '2014-04-07',
				'end' => '2014-04-07',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			7 => 
			array (
				'id' => 16,
				'timestamp' => '2014-05-21 11:28:26',
				'start' => '2014-04-30',
				'end' => '2014-04-30',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			8 => 
			array (
				'id' => 17,
				'timestamp' => '2014-05-21 11:28:34',
				'start' => '2014-04-08',
				'end' => '2014-04-08',
				'title' => 'Liefertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			9 => 
			array (
				'id' => 18,
				'timestamp' => '2014-05-21 11:28:43',
				'start' => '2014-04-03',
				'end' => '2014-04-03',
				'title' => 'Liefertag',
				'hinweis' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			10 => 
			array (
				'id' => 21,
				'timestamp' => '2014-05-23 11:05:44',
				'start' => '2014-05-09',
				'end' => '2014-05-09',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '2014-05-23 09:05:44',
				'updated_at' => '2014-05-23 09:05:44',
			),
			11 => 
			array (
				'id' => 22,
				'timestamp' => '2014-05-23 11:07:49',
				'start' => '2014-05-01',
				'end' => '2014-05-01',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '2014-05-23 09:07:49',
				'updated_at' => '2014-05-23 09:07:49',
			),
			12 => 
			array (
				'id' => 23,
				'timestamp' => '2014-05-23 11:37:53',
				'start' => '2014-05-07',
				'end' => '2014-05-07',
				'title' => 'Liefertag',
				'hinweis' => '',
				'created_at' => '2014-05-23 09:37:53',
				'updated_at' => '2014-05-23 09:37:53',
			),
			13 => 
			array (
				'id' => 24,
				'timestamp' => '2014-05-23 11:40:38',
				'start' => '2014-05-08',
				'end' => '2014-05-08',
				'title' => 'Liefertag',
				'hinweis' => '',
				'created_at' => '2014-05-23 09:40:38',
				'updated_at' => '2014-05-23 09:40:38',
			),
			14 => 
			array (
				'id' => 25,
				'timestamp' => '2014-05-23 11:42:41',
				'start' => '2014-04-29',
				'end' => '2014-04-29',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '2014-05-23 09:42:41',
				'updated_at' => '2014-05-23 09:42:41',
			),
			15 => 
			array (
				'id' => 27,
				'timestamp' => '2014-05-23 11:43:01',
				'start' => '2014-08-08',
				'end' => '2014-08-08',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '2014-05-23 09:43:01',
				'updated_at' => '2014-05-23 09:43:01',
			),
			16 => 
			array (
				'id' => 28,
				'timestamp' => '2014-05-23 13:24:51',
				'start' => '2014-07-12',
				'end' => '0000-00-00',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '2014-05-23 10:41:14',
				'updated_at' => '2014-05-23 11:24:51',
			),
			17 => 
			array (
				'id' => 29,
				'timestamp' => '2014-06-11 13:48:58',
				'start' => '2014-06-12',
				'end' => '0000-00-00',
				'title' => 'Feiertag',
				'hinweis' => '',
				'created_at' => '2014-06-11 11:48:51',
				'updated_at' => '2014-06-11 11:48:58',
			),
		));
	}

}
