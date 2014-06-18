<?php

class RankingTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('ranking')->truncate();
        
		\DB::table('ranking')->insert(array (
			0 => 
			array (
				'ranking_id' => 1,
				'entry_id' => 2,
				'ranking_value' => 1,
				'ranking_column' => 1,
				'judge_id' => 1,
				'contest_id' => 1,
				'timestamp' => '2014-05-12 00:54:06',
				'ip_address' => '1.2.3.4',
				'text' => '',
			),
			1 => 
			array (
				'ranking_id' => 2,
				'entry_id' => 3,
				'ranking_value' => 2,
				'ranking_column' => 2,
				'judge_id' => 1,
				'contest_id' => 1,
				'timestamp' => '2014-05-12 04:39:51',
				'ip_address' => '1.2.3.4',
				'text' => '8050',
			),
			2 => 
			array (
				'ranking_id' => 3,
				'entry_id' => 4,
				'ranking_value' => 0,
				'ranking_column' => 1,
				'judge_id' => 1,
				'contest_id' => 1,
				'timestamp' => '2014-05-11 01:56:54',
				'ip_address' => '1.2.3.4',
				'text' => '',
			),
			3 => 
			array (
				'ranking_id' => 4,
				'entry_id' => 5,
				'ranking_value' => 1,
				'ranking_column' => 1,
				'judge_id' => 1,
				'contest_id' => 1,
				'timestamp' => '2014-05-11 01:56:55',
				'ip_address' => '1.2.3.4',
				'text' => '',
			),
			4 => 
			array (
				'ranking_id' => 5,
				'entry_id' => 1,
				'ranking_value' => 0,
				'ranking_column' => 0,
				'judge_id' => 1,
				'contest_id' => 1,
				'timestamp' => '2014-05-11 01:55:07',
				'ip_address' => '1.2.3.4',
				'text' => '',
			),
		));
	}

}
