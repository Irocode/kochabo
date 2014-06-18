<?php

class PhotosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('photos')->truncate();
        
		\DB::table('photos')->insert(array (
			0 => 
			array (
				'id' => 19,
				'user_id' => 0,
				'file_name' => 'kleineobstbox.png',
				'title' => 'kleineobstbox',
				'pathto' => '',
				'file_size' => 53856,
				'type' => 'PhotoGallery',
				'relationship_id' => 84,
				'path' => '/filemanager/userfiles/products/kleineobstbox.png',
			),
			1 => 
			array (
				'id' => 20,
				'user_id' => 0,
				'file_name' => 'gro0sseobsrtbox.png',
				'title' => 'gro0sseobsrtbox',
				'pathto' => '',
				'file_size' => 66634,
				'type' => 'PhotoGallery',
				'relationship_id' => 83,
				'path' => '/filemanager/userfiles/products/gro0sseobsrtbox.png',
			),
			2 => 
			array (
				'id' => 21,
				'user_id' => 0,
				'file_name' => 'singelbox.png',
				'title' => 'singelbox',
				'pathto' => '',
				'file_size' => 58252,
				'type' => 'PhotoGallery',
				'relationship_id' => 82,
				'path' => '/filemanager/userfiles/products/singelbox.png',
			),
			3 => 
			array (
				'id' => 22,
				'user_id' => 0,
				'file_name' => 'fuerzweibox.png',
				'title' => 'fuerzweibox',
				'pathto' => '',
				'file_size' => 67164,
				'type' => 'PhotoGallery',
				'relationship_id' => 85,
				'path' => '/filemanager/userfiles/products/fuerzweibox.png',
			),
			4 => 
			array (
				'id' => 23,
				'user_id' => 0,
				'file_name' => 'familienbox.png',
				'title' => 'familienbox',
				'pathto' => '',
				'file_size' => 71124,
				'type' => 'PhotoGallery',
				'relationship_id' => 86,
				'path' => '/filemanager/userfiles/products/familienbox.png',
			),
		));
	}

}
