<?php

class PhotoGalleriesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('photo_galleries')->truncate();
        
		\DB::table('photo_galleries')->insert(array (
			0 => 
			array (
				'id' => 3,
				'products_id' => '',
				'title' => 'Anlage_von_Products',
				'content' => 'Products Photo Gallery',
				'created_at' => '2014-06-03 15:31:12',
				'updated_at' => '2014-06-03 15:31:12',
				'is_published' => 0,
			),
			1 => 
			array (
				'id' => 81,
				'products_id' => '',
				'title' => 'Anlage_von_Products',
				'content' => 'Products Photo Gallery',
				'created_at' => '2014-06-04 09:09:09',
				'updated_at' => '2014-06-04 09:09:09',
				'is_published' => 0,
			),
			2 => 
			array (
				'id' => 82,
				'products_id' => '',
				'title' => 'Anlage_von_Products',
				'content' => 'Products Photo Gallery',
				'created_at' => '2014-06-04 08:47:22',
				'updated_at' => '2014-06-04 08:47:22',
				'is_published' => 0,
			),
			3 => 
			array (
				'id' => 83,
				'products_id' => '',
				'title' => 'Anlage_von_Products',
				'content' => 'Products Photo Gallery',
				'created_at' => '2014-06-04 08:48:57',
				'updated_at' => '2014-06-04 08:48:57',
				'is_published' => 0,
			),
			4 => 
			array (
				'id' => 84,
				'products_id' => '',
				'title' => 'Anlage_von_Products',
				'content' => 'Products Photo Gallery',
				'created_at' => '2014-06-04 08:59:22',
				'updated_at' => '2014-06-04 08:59:22',
				'is_published' => 0,
			),
			5 => 
			array (
				'id' => 85,
				'products_id' => '',
				'title' => 'Anlage_von_Products',
				'content' => 'Products Photo Gallery',
				'created_at' => '2014-06-12 08:33:20',
				'updated_at' => '2014-06-12 08:33:20',
				'is_published' => 0,
			),
			6 => 
			array (
				'id' => 86,
				'products_id' => '',
				'title' => 'Anlage_von_Products',
				'content' => 'Products Photo Gallery',
				'created_at' => '2014-06-12 08:34:14',
				'updated_at' => '2014-06-12 08:34:14',
				'is_published' => 0,
			),
		));
	}

}
