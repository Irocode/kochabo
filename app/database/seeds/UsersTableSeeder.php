<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->truncate();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 1,
				'email' => 'admin@admin.com',
				'password' => '$2y$10$NkEaWuEFQTUBHbgEkrT9zeMsx/eePq7zq/8QU/EeTbRLucyfP3GVm',
				'passwordhardcode' => '',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2014-04-19 04:14:45',
				'persist_code' => '$2y$10$rxvjqmdYYZT7VBarfa2/s.MK/vP74qFUPMZUHukjKiDz0T2hAoXMm',
				'reset_password_code' => NULL,
				'first_name' => 'Bernd',
				'date_of_birth' => '0000-00-00',
				'telephone' => '06604258008',
				'gender' => '1',
				'default_billing_address' => 2,
				'default_shipping_address' => 3,
				'last_name' => 'Obendorfer',
				'birthday' => '',
				'birthmonth' => '',
				'birthyear' => '',
				'status' => '0',
				'created_at' => '2014-04-17 16:56:15',
				'updated_at' => '2014-06-09 07:07:57',
				'is_published' => 0,
			),
			1 => 
			array (
				'id' => 3,
				'email' => 'bernd.obendorfer@chello.at',
				'password' => '$2y$10$8AOyQXE.bt4am8Y77Z2WCOOevUxMwZXxG5RV6JazNWi1HAIVjL3wq',
				'passwordhardcode' => '',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'Myu4J2vqYDTVIqfoad3CZQCMYnkWisrCyXwVk5IvHV',
				'activated_at' => NULL,
				'last_login' => '2014-06-16 19:44:52',
				'persist_code' => '$2y$10$yXd9Z2lKfLKBD.T4Z6RXSuCuy8ods27bHmpRvHBdrrCfm9IQPXMh2',
				'reset_password_code' => NULL,
				'first_name' => 'Bernd',
				'date_of_birth' => '1970-01-01',
				'telephone' => '0660645949459',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'Obendorfer',
				'birthday' => '',
				'birthmonth' => '',
				'birthyear' => '',
				'status' => 'admin',
				'created_at' => '2014-04-19 04:02:36',
				'updated_at' => '2014-06-16 19:44:52',
				'is_published' => 0,
			),
			2 => 
			array (
				'id' => 109,
				'email' => 'theresa.schoerky@chello.at',
				'password' => '$2y$10$h2VPB80zNVTi59CqDv/wMudW88fUiB2PEF3E1lZXraCSq05j0NSTy',
				'passwordhardcode' => 'theresa',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'fsDsmN4O6iSkqFTBrfOn9f11irrvc2YFVAqEtu9xkW',
				'activated_at' => NULL,
				'last_login' => '2014-06-16 12:41:07',
				'persist_code' => '$2y$10$F0j4TayUpCrC2hg6ktY.v.E.DFAkZ0nzU/LvEtKkGoUmjmdkKNBZi',
				'reset_password_code' => NULL,
				'first_name' => 'Theresa',
				'date_of_birth' => '0000-00-00',
				'telephone' => '066565656',
				'gender' => 'Frau',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'Sch&ouml;rkhuber',
				'birthday' => '16',
				'birthmonth' => '02',
				'birthyear' => '1985',
				'status' => '',
				'created_at' => '2014-06-16 12:40:56',
				'updated_at' => '2014-06-16 12:41:07',
				'is_published' => 0,
			),
			3 => 
			array (
				'id' => 110,
				'email' => 'robert.ginder@chello.at',
				'password' => '$2y$10$pCjc/sGeLQ9EiGDCSGWw8.kArnb0LraKP54Pe7Wk0tLH92qj/IpJa',
				'passwordhardcode' => '333333',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'qi95leByn6qkcPVs8HcN3BFi8B60R7VBx0NoUnLTt8',
				'activated_at' => NULL,
				'last_login' => '2014-06-16 18:33:39',
				'persist_code' => '$2y$10$ZYnouIRCkJ6EtTBRJmw.puzQsoWmAxxOnlmOYbgyFCC.66Ie96bLS',
				'reset_password_code' => NULL,
				'first_name' => 'Robert',
				'date_of_birth' => '0000-00-00',
				'telephone' => '0660595656569',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'Ginder',
				'birthday' => '19',
				'birthmonth' => '11',
				'birthyear' => '1980',
				'status' => '',
				'created_at' => '2014-06-16 18:33:29',
				'updated_at' => '2014-06-16 18:33:39',
				'is_published' => 0,
			),
		));
	}

}
