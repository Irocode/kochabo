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
				'customers_groups_id' => 2,
				'email' => 'admin@admin.com',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$NkEaWuEFQTUBHbgEkrT9zeMsx/eePq7zq/8QU/EeTbRLucyfP3GVm',
				'passwordhardcode' => '',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => NULL,
				'activated_at' => NULL,
				'last_login' => '2014-04-19 00:14:45',
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
				'created_at' => '2014-04-17 12:56:15',
				'updated_at' => '2014-06-09 03:07:57',
				'is_published' => 0,
			),
			1 => 
			array (
				'id' => 3,
				'customers_groups_id' => 3,
				'email' => 'bernd.obendorfer@chello.at',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$8AOyQXE.bt4am8Y77Z2WCOOevUxMwZXxG5RV6JazNWi1HAIVjL3wq',
				'passwordhardcode' => '',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'Myu4J2vqYDTVIqfoad3CZQCMYnkWisrCyXwVk5IvHV',
				'activated_at' => NULL,
				'last_login' => '2014-07-29 07:09:44',
				'persist_code' => '$2y$10$72iXypC50w0SCySFBFc7wObUCx5xhtXudlgJ8tfuA1KkliAD6F5wq',
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
				'created_at' => '2014-04-19 00:02:36',
				'updated_at' => '2014-07-29 07:09:44',
				'is_published' => 0,
			),
			2 => 
			array (
				'id' => 109,
				'customers_groups_id' => 4,
				'email' => 'theresa.schoerky@chello.at',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$h2VPB80zNVTi59CqDv/wMudW88fUiB2PEF3E1lZXraCSq05j0NSTy',
				'passwordhardcode' => 'theresa',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'fsDsmN4O6iSkqFTBrfOn9f11irrvc2YFVAqEtu9xkW',
				'activated_at' => NULL,
				'last_login' => '2014-06-16 08:41:07',
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
				'created_at' => '2014-06-16 08:40:56',
				'updated_at' => '2014-06-16 08:41:07',
				'is_published' => 0,
			),
			3 => 
			array (
				'id' => 110,
				'customers_groups_id' => 5,
				'email' => 'robert.ginder@chello.at',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$pCjc/sGeLQ9EiGDCSGWw8.kArnb0LraKP54Pe7Wk0tLH92qj/IpJa',
				'passwordhardcode' => '333333',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'qi95leByn6qkcPVs8HcN3BFi8B60R7VBx0NoUnLTt8',
				'activated_at' => NULL,
				'last_login' => '2014-06-16 14:33:39',
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
				'created_at' => '2014-06-16 14:33:29',
				'updated_at' => '2014-06-16 14:33:39',
				'is_published' => 0,
			),
			4 => 
			array (
				'id' => 111,
				'customers_groups_id' => 6,
				'email' => 'bernd.obeddddndorfer@chello.at',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$HqyO5gid8C2dRv7Ofn9mWesJDF/JlMOiMps6gvWus0tImctxKnT7i',
				'passwordhardcode' => '3333334',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'TKB7oRShYyZoOXXXYDvLvFeU9xbPUZoXK8cbtQ7y3V',
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'first_name' => 'mau',
				'date_of_birth' => '0000-00-00',
				'telephone' => '15451515115',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'kau',
				'birthday' => '01',
				'birthmonth' => '01',
				'birthyear' => '2014',
				'status' => '',
				'created_at' => '2014-07-07 06:20:22',
				'updated_at' => '2014-07-07 06:20:22',
				'is_published' => 0,
			),
			5 => 
			array (
				'id' => 112,
				'customers_groups_id' => 9,
				'email' => 'bernd.obendssssorfer@chello.at',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$oyUwjujHa.vEx0bS56y3s.bCfAgA8Los2E9s.YHMo2IFzAPdDxaNe',
				'passwordhardcode' => '2131231',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'JI6KiWu3Ye4dsLZog2c6ZroZi8zmDJRXMU0krWloJr',
				'activated_at' => '2014-07-08 13:16:38',
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'first_name' => 'daSDSA',
				'date_of_birth' => '0000-00-00',
				'telephone' => '2131231321',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'DSAFDSA',
				'birthday' => '02',
				'birthmonth' => '02',
				'birthyear' => '2014',
				'status' => '',
				'created_at' => '2014-07-07 06:36:08',
				'updated_at' => '2014-07-07 06:36:08',
				'is_published' => 0,
			),
			6 => 
			array (
				'id' => 113,
				'customers_groups_id' => 7,
				'email' => 'gast@kochabo.com',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$Z/.gNPZ6z6b/fJ1nRwpRLejz63Fnal/tw1D.aLpW9Hxr56LhGkbla',
				'passwordhardcode' => 'gast05',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'QuV98pWRdtISVJfLSs7lGSCKTkCpFTHWGFiMhIm90X',
				'activated_at' => NULL,
				'last_login' => '2014-07-18 07:38:35',
				'persist_code' => '$2y$10$DrVGIeIkBw3VGuFVloXD8e2XxJSsi4/bOsPbW4LltklypGfVyRqBq',
				'reset_password_code' => NULL,
				'first_name' => 'Kochabo',
				'date_of_birth' => '0000-00-00',
				'telephone' => '4523452345',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'Kochabo TEST',
				'birthday' => '01',
				'birthmonth' => '02',
				'birthyear' => '2014',
				'status' => '',
				'created_at' => '2014-07-07 06:49:24',
				'updated_at' => '2014-07-18 07:38:35',
				'is_published' => 0,
			),
			7 => 
			array (
				'id' => 114,
				'customers_groups_id' => 1,
				'email' => 'bernd.obrfer@chello.at',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$sqZ9ZinW.2e7IZh9kfh1GuqqeQmyZ9zrD.fjt8yfGoHFpY1nP0/du',
				'passwordhardcode' => '999999999999',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => 'T2BdUApZmnBrABRHwzDjZqlV2WJtk73AhFCcLcHROz',
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'first_name' => 'dsafsadf',
				'date_of_birth' => '0000-00-00',
				'telephone' => '52352354',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'adsfdsa',
				'birthday' => '01',
				'birthmonth' => '02',
				'birthyear' => '2014',
				'status' => '',
				'created_at' => '2014-07-07 06:56:01',
				'updated_at' => '2014-07-07 06:56:01',
				'is_published' => 0,
			),
			8 => 
			array (
				'id' => 115,
				'customers_groups_id' => 8,
				'email' => '555nd.obendorfer@chello.at',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$NFoMiPdckIQJwKnGwT1wY.UMpxPJc/ZeFbzP4VQwUwxeaXceTxh7u',
				'passwordhardcode' => '5555555555555555555',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => '0KWy0OOF3SBwX4PluaYpsYqVD7MqLrOZJfnBzcN1pN',
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'first_name' => 'kokok',
				'date_of_birth' => '1970-01-01',
				'telephone' => '5555555555555555555',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'hihi',
				'birthday' => '01',
				'birthmonth' => '01',
				'birthyear' => '2014',
				'status' => '',
				'created_at' => '2014-07-07 06:57:40',
				'updated_at' => '2014-07-08 01:36:22',
				'is_published' => 0,
			),
			9 => 
			array (
				'id' => 116,
				'customers_groups_id' => 6,
				'email' => 'befffnd.obeddddndorfer@chello.at',
				'fbaktuelleemail' => 'yyyy',
				'password' => '$2y$10$63PLZWXCbaujGMzXawBHbuw3bL6Qi.Voy0oYqfEVTLm8J5R3irQPG',
				'passwordhardcode' => '66666767765',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => '9kUlXpAKqVYsE916wRCRxvIIAnpXn2fUMuUKD2cjeq',
				'activated_at' => NULL,
				'last_login' => NULL,
				'persist_code' => NULL,
				'reset_password_code' => NULL,
				'first_name' => 'dsafdsaf',
				'date_of_birth' => '1970-01-01',
				'telephone' => '66666767765',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'dsafdsaf',
				'birthday' => '01',
				'birthmonth' => '02',
				'birthyear' => '2014',
				'status' => '',
				'created_at' => '2014-07-08 02:59:39',
				'updated_at' => '2014-07-29 06:48:23',
				'is_published' => 0,
			),
			10 => 
			array (
				'id' => 168,
				'customers_groups_id' => 4,
				'email' => '3trashkiller@gmail.com',
				'fbaktuelleemail' => '',
				'password' => '$2y$10$1yfh6oRu/f8JhiI8yDaYR.T46yu6sCCZPvFTLwB5NHFyzTbWV0LKy',
				'passwordhardcode' => '',
				'permissions' => NULL,
				'activated' => 1,
				'activation_code' => NULL,
				'activated_at' => '2014-07-29 07:08:19',
				'last_login' => '2014-07-29 07:08:32',
				'persist_code' => '$2y$10$XRAh8blETaWYJfJLT9Id5.uyM7sfYuAp6hnCZqAUSYCOqlmmxeO4y',
				'reset_password_code' => NULL,
				'first_name' => 'Arschi',
				'date_of_birth' => '0000-00-00',
				'telephone' => '',
				'gender' => 'Herr',
				'default_billing_address' => 0,
				'default_shipping_address' => 0,
				'last_name' => 'Lochi',
				'birthday' => '1',
				'birthmonth' => '1',
				'birthyear' => '1922',
				'status' => '',
				'created_at' => '2014-07-29 07:08:18',
				'updated_at' => '2014-07-29 07:08:32',
				'is_published' => 0,
			),
		));
	}

}
