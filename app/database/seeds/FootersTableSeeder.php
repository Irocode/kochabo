<?php

class FootersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('footers')->truncate();
        
		\DB::table('footers')->insert(array (
			0 => 
			array (
				'id' => 7,
				'hl_ueberuns' => 'Über uns',
				'ct_ueberuns' => 'Du kannst dir die KochAbo-Box wöchentlich oder alle zwei Wochen liefern lassen, und jederzeit pausieren oder stornieren. ',
				'hl_rezepte' => 'Gratis Rezepte
',
				'slug' => 'footer',
				'datetime' => '2014-05-19',
				'created_at' => '2014-05-19 05:57:04',
				'updated_at' => '2014-05-21 09:28:11',
				'is_published' => 1,
				'ct_rezepte' => 'Jede Woche zaubern wir in unserer Test-Küche fünf neue fabelhafte Rezepte. Eine gesunde Mischung aus altbewährten Klassikern und kreativen Neu-Entdeckungen.',
				'hl_contact' => 'Kontakt',
				'ct_contact' => ' <p>Strobachgasse 4/6<br />
1050 Wien<br />
Telefon: 01 544 3900<br />
Fax: 01 544 3900/6<br />
E-Mail: <a href="mailto:hilfe@kochabo.at">hilfe@kochabo.at</a><br />
<br />
Wir sind f&uuml;r dich da:<br />
Mo: 09:00-22:30 | Di - Fr: 09:00 - 18:00test</p>
',
			),
		));
	}

}
