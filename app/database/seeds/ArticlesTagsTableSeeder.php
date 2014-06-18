<?php

class ArticlesTagsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('articles_tags')->truncate();
        
		\DB::table('articles_tags')->insert(array (
			0 => 
			array (
				'id' => 4,
				'article_id' => 2,
				'tag_id' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			1 => 
			array (
				'id' => 5,
				'article_id' => 2,
				'tag_id' => 2,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			2 => 
			array (
				'id' => 6,
				'article_id' => 3,
				'tag_id' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			3 => 
			array (
				'id' => 7,
				'article_id' => 3,
				'tag_id' => 2,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			4 => 
			array (
				'id' => 8,
				'article_id' => 3,
				'tag_id' => 2,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			5 => 
			array (
				'id' => 9,
				'article_id' => 4,
				'tag_id' => 4,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			6 => 
			array (
				'id' => 10,
				'article_id' => 4,
				'tag_id' => 5,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			7 => 
			array (
				'id' => 11,
				'article_id' => 2,
				'tag_id' => 3,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			8 => 
			array (
				'id' => 12,
				'article_id' => 5,
				'tag_id' => 5,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			9 => 
			array (
				'id' => 13,
				'article_id' => 5,
				'tag_id' => 2,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			10 => 
			array (
				'id' => 16,
				'article_id' => 6,
				'tag_id' => 2,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			11 => 
			array (
				'id' => 17,
				'article_id' => 7,
				'tag_id' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			12 => 
			array (
				'id' => 18,
				'article_id' => 8,
				'tag_id' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			13 => 
			array (
				'id' => 19,
				'article_id' => 9,
				'tag_id' => 3,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			14 => 
			array (
				'id' => 20,
				'article_id' => 9,
				'tag_id' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			15 => 
			array (
				'id' => 21,
				'article_id' => 10,
				'tag_id' => 1,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			16 => 
			array (
				'id' => 22,
				'article_id' => 10,
				'tag_id' => 2,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			17 => 
			array (
				'id' => 23,
				'article_id' => 10,
				'tag_id' => 3,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			18 => 
			array (
				'id' => 24,
				'article_id' => 10,
				'tag_id' => 4,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
			19 => 
			array (
				'id' => 25,
				'article_id' => 10,
				'tag_id' => 5,
				'created_at' => '2014-04-01 17:52:26',
				'updated_at' => '2014-04-01 17:52:26',
			),
		));
	}

}
