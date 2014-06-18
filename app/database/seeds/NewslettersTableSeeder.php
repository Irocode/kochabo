<?php

class NewslettersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('newsletters')->truncate();
        
		\DB::table('newsletters')->insert(array (
			0 => 
			array (
				'id' => 1,
				'user_id' => 0,
				'email' => 'zorxox@t.at',
				'first_name' => '',
				'last_name' => '',
				'created_at' => '2014-04-30 15:49:46',
				'updated_at' => '2014-04-30 13:49:46',
				'aktiviert' => 'aktiviert',
				'code' => 2619934,
			),
			1 => 
			array (
				'id' => 10,
				'user_id' => 0,
				'email' => 'robdert@gier.at',
				'first_name' => '',
				'last_name' => '',
				'created_at' => '2014-04-30 15:50:02',
				'updated_at' => '2014-04-30 13:50:02',
				'aktiviert' => '',
				'code' => 1212768,
			),
			2 => 
			array (
				'id' => 13,
				'user_id' => 0,
				'email' => 'sd@da.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 05:46:58',
				'updated_at' => '2014-04-30 05:46:58',
				'aktiviert' => '',
				'code' => 1785888,
			),
			3 => 
			array (
				'id' => 14,
				'user_id' => 0,
				'email' => 'e@e.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 05:49:35',
				'updated_at' => '2014-04-30 05:49:35',
				'aktiviert' => '',
				'code' => 8886413,
			),
			4 => 
			array (
				'id' => 15,
				'user_id' => 0,
				'email' => 'richard@reini.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 05:53:03',
				'updated_at' => '2014-04-30 05:53:03',
				'aktiviert' => '',
				'code' => 3027038,
			),
			5 => 
			array (
				'id' => 16,
				'user_id' => 0,
				'email' => 'test7@gemail.com',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 06:01:06',
				'updated_at' => '2014-04-30 06:01:06',
				'aktiviert' => '',
				'code' => 6150512,
			),
			6 => 
			array (
				'id' => 18,
				'user_id' => 0,
				'email' => 'w.w@chello.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 06:05:15',
				'updated_at' => '2014-04-30 06:05:15',
				'aktiviert' => '',
				'code' => 9933471,
			),
			7 => 
			array (
				'id' => 20,
				'user_id' => 0,
				'email' => 'aaaaa@aaa.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 06:06:04',
				'updated_at' => '2014-04-30 06:06:04',
				'aktiviert' => '',
				'code' => 8101196,
			),
			8 => 
			array (
				'id' => 21,
				'user_id' => 0,
				'email' => 'eeeeee@ee.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 06:07:07',
				'updated_at' => '2014-04-30 06:07:07',
				'aktiviert' => '',
				'code' => 7779541,
			),
			9 => 
			array (
				'id' => 22,
				'user_id' => 0,
				'email' => 'ssssssd@da.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 06:07:40',
				'updated_at' => '2014-04-30 06:07:40',
				'aktiviert' => '',
				'code' => 1485290,
			),
			10 => 
			array (
				'id' => 23,
				'user_id' => 0,
				'email' => 'richsard@reini.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 08:55:32',
				'updated_at' => '2014-04-30 08:55:32',
				'aktiviert' => '',
				'code' => 4961853,
			),
			11 => 
			array (
				'id' => 24,
				'user_id' => 0,
				'email' => 'bernd.obessndorfer@chello.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 08:56:22',
				'updated_at' => '2014-04-30 08:56:22',
				'aktiviert' => '',
				'code' => 4528808,
			),
			12 => 
			array (
				'id' => 26,
				'user_id' => 0,
				'email' => 'bernd.obggessndoffrfer@chello.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 08:57:38',
				'updated_at' => '2014-04-30 08:57:38',
				'aktiviert' => '',
				'code' => 6327819,
			),
			13 => 
			array (
				'id' => 27,
				'user_id' => 0,
				'email' => 'aaaaa@aaa.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:10:23',
				'updated_at' => '2014-04-30 09:10:23',
				'aktiviert' => '',
				'code' => 3762817,
			),
			14 => 
			array (
				'id' => 30,
				'user_id' => 0,
				'email' => 'aassssaaa@aaa.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:11:17',
				'updated_at' => '2014-04-30 09:11:17',
				'aktiviert' => '',
				'code' => 9851989,
			),
			15 => 
			array (
				'id' => 31,
				'user_id' => 0,
				'email' => 'ssssssd@da.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:17:26',
				'updated_at' => '2014-04-30 09:17:26',
				'aktiviert' => '',
				'code' => 7547302,
			),
			16 => 
			array (
				'id' => 32,
				'user_id' => 0,
				'email' => 'admaaassain@admin.com',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:35:40',
				'updated_at' => '2014-04-30 09:35:40',
				'aktiviert' => '',
				'code' => 3293762,
			),
			17 => 
			array (
				'id' => 33,
				'user_id' => 0,
				'email' => 'admaaddaain@admin.com',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 11:45:17',
				'updated_at' => '2014-04-30 09:45:17',
				'aktiviert' => 'aktiviert',
				'code' => 9363403,
			),
			18 => 
			array (
				'id' => 34,
				'user_id' => 0,
				'email' => 'sd@da.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:39:02',
				'updated_at' => '2014-04-30 09:39:02',
				'aktiviert' => '',
				'code' => 7727050,
			),
			19 => 
			array (
				'id' => 35,
				'user_id' => 0,
				'email' => 'sdss@da.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:39:54',
				'updated_at' => '2014-04-30 09:39:54',
				'aktiviert' => '',
				'code' => 3137512,
			),
			20 => 
			array (
				'id' => 36,
				'user_id' => 0,
				'email' => 'f@d.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:40:32',
				'updated_at' => '2014-04-30 09:40:32',
				'aktiviert' => '',
				'code' => 5435791,
			),
			21 => 
			array (
				'id' => 37,
				'user_id' => 0,
				'email' => 'aaaaaaa@aaa.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:44:53',
				'updated_at' => '2014-04-30 09:44:53',
				'aktiviert' => '',
				'code' => 4477233,
			),
			22 => 
			array (
				'id' => 38,
				'user_id' => 0,
				'email' => 'testaaaaa@aaa.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 11:51:35',
				'updated_at' => '2014-04-30 09:51:35',
				'aktiviert' => 'aktiviert',
				'code' => 3140258,
			),
			23 => 
			array (
				'id' => 39,
				'user_id' => 0,
				'email' => 'dsaf@ccc.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:58:05',
				'updated_at' => '2014-04-30 09:58:05',
				'aktiviert' => '',
				'code' => 3046875,
			),
			24 => 
			array (
				'id' => 40,
				'user_id' => 0,
				'email' => 'aa@dd.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 09:58:21',
				'updated_at' => '2014-04-30 09:58:21',
				'aktiviert' => '',
				'code' => 9170227,
			),
			25 => 
			array (
				'id' => 41,
				'user_id' => 0,
				'email' => 'aa@dd.at',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 11:59:06',
				'updated_at' => '2014-04-30 09:59:06',
				'aktiviert' => 'aktiviert',
				'code' => 7847290,
			),
			26 => 
			array (
				'id' => 42,
				'user_id' => 0,
				'email' => 'admsssaaaain@admin.com',
				'first_name' => NULL,
				'last_name' => NULL,
				'created_at' => '2014-04-30 10:03:01',
				'updated_at' => '2014-04-30 10:03:01',
				'aktiviert' => '',
				'code' => 883483,
			),
			27 => 
			array (
				'id' => 43,
				'user_id' => 0,
				'email' => 'test7.mail@chello.at',
				'first_name' => 'test',
				'last_name' => 'testtest',
				'created_at' => '2014-04-30 11:09:58',
				'updated_at' => '2014-04-30 11:09:58',
				'aktiviert' => '',
				'code' => 0,
			),
		));
	}

}
