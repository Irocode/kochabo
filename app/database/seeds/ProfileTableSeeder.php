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
				'id' => 4,
				'user_id' => 120,
				'username' => 'Arschi Lochi',
				'email' => '3trashkiller@gmail.com',
				'created_at' => '2014-07-22 05:42:07',
				'updated_at' => '2014-07-22 05:42:07',
			),
		));
	}

}
