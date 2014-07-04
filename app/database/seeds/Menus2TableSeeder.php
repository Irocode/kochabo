<?php

class Menus2TableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('menus2')->truncate();
        
		\DB::table('menus2')->insert(array (
			0 => 
			array (
				'id' => 1,
				'title' => 'Start',
				'url' => '/',
				'order' => 1,
				'parent_id' => 0,
				'type' => 'module',
				'option' => 'home',
				'is_published' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-05-23 05:46:48',
			),
			1 => 
			array (
				'id' => 2,
				'title' => 'News',
				'url' => '/news',
				'order' => 10,
				'parent_id' => 17,
				'type' => 'module',
				'option' => 'news',
				'is_published' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-06-12 09:09:08',
			),
			2 => 
			array (
				'id' => 3,
				'title' => 'Blog',
				'url' => '/article',
				'order' => 9,
				'parent_id' => 17,
				'type' => 'module',
				'option' => 'blog',
				'is_published' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-06-12 09:09:08',
			),
			3 => 
			array (
				'id' => 4,
				'title' => 'Kontakt',
				'url' => '/contact',
				'order' => 17,
				'parent_id' => 17,
				'type' => 'module',
				'option' => 'contact',
				'is_published' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-06-12 09:09:08',
			),
			4 => 
			array (
				'id' => 5,
				'title' => 'Angebote',
				'url' => '/offer',
				'order' => 6,
				'parent_id' => 0,
				'type' => 'module',
				'option' => 'offer',
				'is_published' => 0,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-20 06:37:42',
			),
			5 => 
			array (
				'id' => 6,
				'title' => 'Impressum',
				'url' => '/page/4',
				'order' => 7,
				'parent_id' => 0,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 0,
				'created_at' => '2014-04-02 18:55:03',
				'updated_at' => '2014-04-20 06:37:42',
			),
			6 => 
			array (
				'id' => 8,
				'title' => 'Team',
				'url' => '/page/1',
				'order' => 18,
				'parent_id' => 17,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-04 15:32:43',
				'updated_at' => '2014-06-12 09:09:29',
			),
			7 => 
			array (
				'id' => 9,
				'title' => 'Fotos',
				'url' => '/photo_gallery/1',
				'order' => 11,
				'parent_id' => 17,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-07 11:33:08',
				'updated_at' => '2014-06-12 09:09:08',
			),
			8 => 
			array (
				'id' => 10,
				'title' => 'Photo Gallery 2',
				'url' => '/photo_gallery/2',
				'order' => 12,
				'parent_id' => 17,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 0,
				'created_at' => '2014-04-08 09:47:05',
				'updated_at' => '2014-06-12 09:09:08',
			),
			9 => 
			array (
				'id' => 11,
				'title' => 'Photo Gallery - Unsere Kunden',
				'url' => '/photo_gallery/3',
				'order' => 13,
				'parent_id' => 17,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 0,
				'created_at' => '2014-04-08 09:47:34',
				'updated_at' => '2014-06-12 09:09:08',
			),
			10 => 
			array (
				'id' => 12,
				'title' => 'Hilfe',
				'url' => '/page/5',
				'order' => 16,
				'parent_id' => 17,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-08 09:52:57',
				'updated_at' => '2014-06-12 09:09:08',
			),
			11 => 
			array (
				'id' => 13,
				'title' => 'Impressum',
				'url' => '/page/4',
				'order' => 14,
				'parent_id' => 17,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-08 09:53:29',
				'updated_at' => '2014-06-12 09:09:08',
			),
			12 => 
			array (
				'id' => 14,
				'title' => 'AGB\'s',
				'url' => '/page/3',
				'order' => 15,
				'parent_id' => 17,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-08 09:54:01',
				'updated_at' => '2014-06-12 09:09:08',
			),
			13 => 
			array (
				'id' => 17,
				'title' => 'Sonstiges',
				'url' => '/page/6',
				'order' => 8,
				'parent_id' => 0,
				'type' => 'module',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-08 10:26:10',
				'updated_at' => '2014-06-12 09:09:08',
			),
			14 => 
			array (
				'id' => 18,
				'title' => 'Beispielbox',
				'url' => '/beispielbox',
				'order' => 5,
				'parent_id' => 0,
				'type' => 'custom',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-10 08:13:49',
				'updated_at' => '2014-04-11 11:10:19',
			),
			15 => 
			array (
				'id' => 19,
				'title' => 'So funktioniert\'s',
				'url' => '/sofunktioniertes',
				'order' => 2,
				'parent_id' => 0,
				'type' => 'custom',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-10 08:23:54',
				'updated_at' => '2014-05-17 09:41:53',
			),
			16 => 
			array (
				'id' => 20,
				'title' => 'KochAbo-Box',
				'url' => '/kochabobox',
				'order' => 3,
				'parent_id' => 0,
				'type' => 'custom',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-10 08:24:50',
				'updated_at' => '2014-04-11 11:10:19',
			),
			17 => 
			array (
				'id' => 21,
				'title' => 'Obstbox',
				'url' => 'obstbox',
				'order' => 4,
				'parent_id' => 0,
				'type' => 'custom',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-10 08:28:05',
				'updated_at' => '2014-04-11 14:04:19',
			),
			18 => 
			array (
				'id' => 22,
				'title' => 'Mein Konto',
				'url' => 'meinkonto',
				'order' => 19,
				'parent_id' => 0,
				'type' => 'custom',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-04-20 06:36:53',
				'updated_at' => '2014-04-20 06:45:37',
			),
			19 => 
			array (
				'id' => 23,
				'title' => 'Shop',
				'url' => '/shop',
				'order' => 20,
				'parent_id' => 0,
				'type' => 'custom',
				'option' => NULL,
				'is_published' => 1,
				'created_at' => '2014-06-12 09:02:39',
				'updated_at' => '2014-06-12 09:03:00',
			),
		));
	}

}
