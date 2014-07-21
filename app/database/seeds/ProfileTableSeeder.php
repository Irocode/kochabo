<?php

class ProfileTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('profile')->truncate();
        
		\DB::table('profile')->insert(array (
			0 => 
			array (
				'id' => 1,
				'user_id' => 117,
				'username' => 'Bernd Obendorfer',
				'email' => 'bernd.obendorfer@chello.at',
				'created_at' => '2014-07-21 06:32:05',
				'updated_at' => '2014-07-21 06:32:05',
			),
			1 => 
			array (
				'id' => 2,
				'user_id' => 118,
				'username' => 'Arschi Lochi',
				'email' => '3trashkiller@gmail.com',
				'created_at' => '2014-07-21 08:02:15',
				'updated_at' => '2014-07-21 08:02:15',
			),
		));
	}

}
