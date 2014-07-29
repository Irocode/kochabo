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
				'id' => 41,
				'user_id' => 168,
				'username' => 'Arschi Lochi',
				'firstname' => 'Arschi',
				'lastname' => 'Lochi',
				'gender' => 'male',
				'language' => '',
				'age' => '',
				'birthday' => '1',
				'birthmonth' => '1',
				'birthyear' => '1922',
				'phone' => '',
				'address' => '',
				'country' => 'Austria',
				'region' => 'Vienna, Austria',
				'city' => 'Vienna',
				'zip' => '',
				'email' => '3trashkiller@gmail.com',
				'created_at' => '2014-07-29 07:08:19',
				'updated_at' => '2014-07-29 07:08:19',
			),
		));
	}

}
