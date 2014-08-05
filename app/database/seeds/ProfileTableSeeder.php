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
				'id' => 48,
				'user_id' => 175,
				'username' => 'Mucki Fatz',
				'firstname' => 'Mucki',
				'lastname' => 'Fatz',
				'gender' => 'female',
				'language' => '',
				'age' => '',
				'birthday' => '1',
				'birthmonth' => '2',
				'birthyear' => '1974',
				'phone' => '',
				'address' => '',
				'country' => 'Austria',
				'region' => 'Vienna, Austria',
				'city' => 'Vienna',
				'zip' => '',
				'email' => 'b.obendorfer@kochabo.com',
				'identifier' => '100005536279384',
				'created_at' => '2014-08-01 09:44:36',
				'updated_at' => '2014-08-01 09:44:36',
			),
		));
	}

}
