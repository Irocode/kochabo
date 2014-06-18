<?php

class ArticlesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('articles')->truncate();
        
		\DB::table('articles')->insert(array (
			0 => 
			array (
				'id' => 11,
				'title' => 'Blog Post 11',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ',
				'slug' => 'blog-post-11',
				'category_id' => 2,
				'meta_keywords' => 'blog, post, 11',
				'meta_description' => 'Blog Post 11',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
				'is_published' => 1,
			),
			1 => 
			array (
				'id' => 12,
				'title' => 'Blog Post 12',
				'content' => 'In varius volutpat accumsan. Nam rhoncus massa ipsum. In ante erat, vestibulum non neque sit amet, sagittis ultricies risus. Nam iaculis leo risus, at malesuada arcu dictum quis. Nulla blandit mi turpis, nec vestibulum diam suscipit egestas. Aliquam ut mollis nulla. Sed scelerisque, magna vel scelerisque porta, mauris sem varius massa, eget sagittis dui eros id metus. Curabitur imperdiet est tellus, sed rutrum lacus viverra ut. Donec gravida adipiscing tellus sit amet posuere. Duis vel auctor arcu, nec ornare purus. Nulla vehicula, eros quis imperdiet laoreet, libero ipsum porttitor dui, consequat fringilla nulla lectus non elit. ',
				'slug' => 'blog-post-12',
				'category_id' => 2,
				'meta_keywords' => 'blog, post, 12',
				'meta_description' => 'Blog Post 12',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
				'is_published' => 1,
			),
			2 => 
			array (
				'id' => 13,
				'title' => 'Blog Post 13',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ',
				'slug' => 'blog-post-13',
				'category_id' => 3,
				'meta_keywords' => 'blog, post, 13',
				'meta_description' => 'Blog Post 13',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
				'is_published' => 1,
			),
			3 => 
			array (
				'id' => 14,
				'title' => 'Blog Post 14',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ',
				'slug' => 'blog-post-14',
				'category_id' => 3,
				'meta_keywords' => 'blog, post, 14',
				'meta_description' => 'Blog Post 14',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
				'is_published' => 1,
			),
			4 => 
			array (
				'id' => 15,
				'title' => 'Tomate – Schneiden und Filetieren',
			'content' => '<p><span style="background-color:rgb(255, 255, 255); color:rgb(54, 54, 54); font-family:muli,helvetica,arial,sans-serif; font-size:17px">Tomaten sind eine beliebte Zutat in vielen Gerichten, sie sind saftig und und geben einem Gericht eine s&uuml;&szlig;-saure Note, je nach Art und Reifegrad. Wenn man wei&szlig;, wie, dann sind Tomaten auch leicht zuzubereiten und auch das Filetieren ist keine Hexerei. Wir zeigen euch, wies geht.</span></p>
',
				'slug' => 'tomate-schneiden-und-filetieren',
				'category_id' => 4,
				'meta_keywords' => 'Tomaten sind eine beliebte Zutat in vielen Gerichten, sie sind saftig und und geben einem Gericht eine süß-saure Note, je nach Art und Reifegrad. Wenn man weiß, wie, dann sind Tomaten auch leicht zuzubereiten und auch das Filetieren ist keine Hexerei. Wir',
				'meta_description' => 'Blog Post 14',
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-06 22:35:01',
				'is_published' => 1,
			),
		));
	}

}
