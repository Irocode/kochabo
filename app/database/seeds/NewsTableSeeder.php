<?php

class NewsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('news')->truncate();
        
		\DB::table('news')->insert(array (
			0 => 
			array (
				'id' => 7,
				'title' => 'News 1',
				'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo.<br />
&nbsp;<br />
<img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img6.jpg" style="height:333px; width:500px" /></p>
',
				'slug' => 'news-1',
				'datetime' => '2014-05-19',
				'created_at' => '2014-05-19 05:57:04',
				'updated_at' => '2014-05-30 13:15:49',
				'is_published' => 1,
				'bild1' => '<p><img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img9.jpg" style="height:333px; width:500px" /></p>
',
			),
			1 => 
			array (
				'id' => 8,
				'title' => 'New2',
				'content' => '<p>Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
<img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img8.jpg" style="height:345px; width:500px" /></p>
',
				'slug' => 'new2',
				'datetime' => '2014-05-21',
				'created_at' => '2014-05-19 06:01:35',
				'updated_at' => '2014-05-19 09:47:33',
				'is_published' => 1,
				'bild1' => '<p><img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img8.jpg" style="height:345px; width:500px" /></p>
',
			),
			2 => 
			array (
				'id' => 9,
				'title' => 'news 3',
				'content' => '<p>Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper.<br />
<img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img9.jpg" style="height:333px; width:500px" /></p>
',
				'slug' => 'news-3',
				'datetime' => '2014-05-23',
				'created_at' => '2014-05-19 06:02:29',
				'updated_at' => '2014-05-19 08:58:38',
				'is_published' => 1,
				'bild1' => '<p><img alt="" src="http://127.0.0.1/laravel/kochabo/uploads/doksoft_uploader/news/img6.jpg" style="height:333px; width:500px" /></p>
',
			),
		));
	}

}
