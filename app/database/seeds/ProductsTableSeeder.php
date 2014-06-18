<?php

class ProductsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('products')->truncate();
        
		\DB::table('products')->insert(array (
			0 => 
			array (
				'id' => 82,
				'user_id' => 0,
				'photo_galleries_id' => 82,
				'product_name' => 'Singlebox',
				'description' => 'Rundum-Sorglos-Paket für 3 köstliche Abendessen ',
				'picurl' => 'singelbox.png',
				'picangelegt' => 'ja',
				'type' => 'KochAbo-Box',
				'nr_of_recipes' => 1,
				'nr_of_persons' => 1,
				'price' => '34.90',
				'productlink' => '',
				'currency' => 'EUR',
				'ust' => 0,
				'recipetype' => 'Classic',
				'sku' => '1',
				'standalone' => 1,
				'updated_at' => '2014-06-12 08:32:13',
				'created_at' => '2014-06-04 06:59:32',
				'is_published' => '',
			),
			1 => 
			array (
				'id' => 83,
				'user_id' => 0,
				'photo_galleries_id' => 83,
				'product_name' => 'Große Obstbox',
				'description' => 'ca. 5 kg Obst ab 4 Personen 5 bis 6 Sorten Obst ',
				'picurl' => 'gro0sseobsrtbox.png',
				'picangelegt' => 'ja',
				'type' => 'Obstbox',
				'nr_of_recipes' => 1,
				'nr_of_persons' => 1,
				'price' => '24.90',
				'productlink' => '/obstbox',
				'currency' => 'EUR',
				'ust' => 0,
				'recipetype' => 'Vegan',
				'sku' => '1',
				'standalone' => 1,
				'updated_at' => '2014-06-12 10:01:40',
				'created_at' => '2014-06-04 08:48:46',
				'is_published' => '',
			),
			2 => 
			array (
				'id' => 84,
				'user_id' => 0,
				'photo_galleries_id' => 84,
				'product_name' => 'Kleine Obstbox',
				'description' => 'ca. 3 kg Obst für 2 bis 3 Personen 5 bis 6 Sorten Obst ',
				'picurl' => 'kleineobstbox.png',
				'picangelegt' => 'ja',
				'type' => 'Obstbox',
				'nr_of_recipes' => 1,
				'nr_of_persons' => 1,
				'price' => '18.90',
				'productlink' => '',
				'currency' => 'EUR',
				'ust' => 0,
				'recipetype' => 'Vegan',
				'sku' => '1',
				'standalone' => 1,
				'updated_at' => '2014-06-10 03:25:11',
				'created_at' => '2014-06-04 08:59:12',
				'is_published' => '',
			),
			3 => 
			array (
				'id' => 85,
				'user_id' => 0,
				'photo_galleries_id' => 85,
				'product_name' => 'Für Zwei',
				'description' => 'Für 2 Personen. Dazu passende tolle Rezepte.',
				'picurl' => 'fuerzweibox.png',
				'picangelegt' => 'ja',
				'type' => 'KochAbo-Box',
				'nr_of_recipes' => 1,
				'nr_of_persons' => 1,
				'price' => '41.90',
				'productlink' => '',
				'currency' => 'EUR',
				'ust' => 0,
				'recipetype' => 'Classic',
				'sku' => '1',
				'standalone' => 1,
				'updated_at' => '2014-06-12 08:35:50',
				'created_at' => '2014-06-12 08:33:12',
				'is_published' => '',
			),
			4 => 
			array (
				'id' => 86,
				'user_id' => 0,
				'photo_galleries_id' => 86,
				'product_name' => 'Familienbox',
				'description' => 'Für 3-4 Personen. Dazu passende tolle Rezepte.',
				'picurl' => 'familienbox.png',
				'picangelegt' => 'ja',
				'type' => 'KochAbo-Box',
				'nr_of_recipes' => 1,
				'nr_of_persons' => 1,
				'price' => '79.90',
				'productlink' => '',
				'currency' => 'EUR',
				'ust' => 0,
				'recipetype' => 'Classic',
				'sku' => '1',
				'standalone' => 1,
				'updated_at' => '2014-06-12 08:36:15',
				'created_at' => '2014-06-12 08:34:01',
				'is_published' => '',
			),
		));
	}

}
