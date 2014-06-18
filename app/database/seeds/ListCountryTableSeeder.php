<?php

class ListCountryTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('list_country')->truncate();
        
		\DB::table('list_country')->insert(array (
			0 => 
			array (
				'code' => 'AT',
				'en' => 'Austria',
				'de' => 'Österreich',
			),
			1 => 
			array (
				'code' => 'CH',
				'en' => 'Switzerland',
				'de' => 'Schweiz',
			),
			2 => 
			array (
				'code' => 'AF',
				'en' => 'Afghanistan',
				'de' => 'Afghanistan',
			),
			3 => 
			array (
				'code' => 'AG',
				'en' => 'Antigua and Barbuda',
				'de' => 'Antigua und Barbuda',
			),
			4 => 
			array (
				'code' => 'AI',
				'en' => 'Anguilla',
				'de' => 'Anguilla',
			),
			5 => 
			array (
				'code' => 'AL',
				'en' => 'Albania',
				'de' => 'Albanien',
			),
			6 => 
			array (
				'code' => 'AM',
				'en' => 'Armenia',
				'de' => 'Armenien',
			),
			7 => 
			array (
				'code' => 'AN',
				'en' => 'Netherlands Antilles',
				'de' => 'Niederländische Antillen',
			),
			8 => 
			array (
				'code' => 'AO',
				'en' => 'Angola',
				'de' => 'Angola',
			),
			9 => 
			array (
				'code' => 'AQ',
				'en' => 'Antarctica',
				'de' => 'Antarktis',
			),
			10 => 
			array (
				'code' => 'AR',
				'en' => 'Argentina',
				'de' => 'Argentinien',
			),
			11 => 
			array (
				'code' => 'AS',
				'en' => 'American Samoa',
				'de' => 'Amerikanisch-Samoa',
			),
			12 => 
			array (
				'code' => 'AD',
				'en' => 'Andorra',
				'de' => 'Andorra',
			),
			13 => 
			array (
				'code' => 'AU',
				'en' => 'Australia',
				'de' => 'Australien',
			),
			14 => 
			array (
				'code' => 'AW',
				'en' => 'Aruba',
				'de' => 'Aruba',
			),
			15 => 
			array (
				'code' => 'AX',
				'en' => 'Aland Islands',
				'de' => 'Åland',
			),
			16 => 
			array (
				'code' => 'AZ',
				'en' => 'Azerbaijan',
				'de' => 'Aserbaidschan',
			),
			17 => 
			array (
				'code' => 'BA',
				'en' => 'Bosnia and Herzegovina',
				'de' => 'Bosnien und Herzegowina',
			),
			18 => 
			array (
				'code' => 'BB',
				'en' => 'Barbados',
				'de' => 'Barbados',
			),
			19 => 
			array (
				'code' => 'BD',
				'en' => 'Bangladesh',
				'de' => 'Bangladesch',
			),
			20 => 
			array (
				'code' => 'BE',
				'en' => 'Belgium',
				'de' => 'Belgien',
			),
			21 => 
			array (
				'code' => 'BF',
				'en' => 'Burkina Faso',
				'de' => 'Burkina Faso',
			),
			22 => 
			array (
				'code' => 'BG',
				'en' => 'Bulgaria',
				'de' => 'Bulgarien',
			),
			23 => 
			array (
				'code' => 'BH',
				'en' => 'Bahrain',
				'de' => 'Bahrain',
			),
			24 => 
			array (
				'code' => 'BI',
				'en' => 'Burundi',
				'de' => 'Burundi',
			),
			25 => 
			array (
				'code' => 'BJ',
				'en' => 'Benin',
				'de' => 'Benin',
			),
			26 => 
			array (
				'code' => 'BM',
				'en' => 'Bermuda',
				'de' => 'Bermuda',
			),
			27 => 
			array (
				'code' => 'BN',
				'en' => 'Brunei',
				'de' => 'Brunei Darussalam',
			),
			28 => 
			array (
				'code' => 'BO',
				'en' => 'Bolivia',
				'de' => 'Bolivien',
			),
			29 => 
			array (
				'code' => 'BR',
				'en' => 'Brazil',
				'de' => 'Brasilien',
			),
			30 => 
			array (
				'code' => 'BS',
				'en' => 'Bahamas',
				'de' => 'Bahamas',
			),
			31 => 
			array (
				'code' => 'BT',
				'en' => 'Bhutan',
				'de' => 'Bhutan',
			),
			32 => 
			array (
				'code' => 'BV',
				'en' => 'Bouvet Island',
				'de' => 'Bouvetinsel',
			),
			33 => 
			array (
				'code' => 'BW',
				'en' => 'Botswana',
				'de' => 'Botswana',
			),
			34 => 
			array (
				'code' => 'BY',
				'en' => 'Belarus',
			'de' => 'Belarus (Weißrussland)',
			),
			35 => 
			array (
				'code' => 'BZ',
				'en' => 'Belize',
				'de' => 'Belize',
			),
			36 => 
			array (
				'code' => 'CA',
				'en' => 'Canada',
				'de' => 'Kanada',
			),
			37 => 
			array (
				'code' => 'CC',
			'en' => 'Cocos (Keeling) Islands',
			'de' => 'Kokosinseln (Keelinginseln)',
			),
			38 => 
			array (
				'code' => 'CD',
			'en' => 'Congo (Kinshasa)',
				'de' => 'Kongo',
			),
			39 => 
			array (
				'code' => 'CF',
				'en' => 'Central African Republic',
				'de' => 'Zentralafrikanische Republik',
			),
			40 => 
			array (
				'code' => 'CG',
			'en' => 'Congo (Brazzaville)',
				'de' => 'Republik Kongo',
			),
			41 => 
			array (
				'code' => 'A€',
				'en' => 'United Arab Emirates ',
				'de' => 'Vereinigte Arabische Emirate',
			),
			42 => 
			array (
				'code' => 'CI',
				'en' => 'Ivory Coast',
				'de' => 'Elfenbeinküste',
			),
			43 => 
			array (
				'code' => 'CK',
				'en' => 'Cook Islands',
				'de' => 'Cookinseln',
			),
			44 => 
			array (
				'code' => 'CL',
				'en' => 'Chile',
				'de' => 'Chile',
			),
			45 => 
			array (
				'code' => 'CM',
				'en' => 'Cameroon',
				'de' => 'Kamerun',
			),
			46 => 
			array (
				'code' => 'CN',
				'en' => 'China',
				'de' => 'China, Volksrepublik',
			),
			47 => 
			array (
				'code' => 'CO',
				'en' => 'Colombia',
				'de' => 'Kolumbien',
			),
			48 => 
			array (
				'code' => 'CR',
				'en' => 'Costa Rica',
				'de' => 'Costa Rica',
			),
			49 => 
			array (
				'code' => 'CS',
				'en' => 'Serbia And Montenegro',
				'de' => 'Serbien und Montenegro',
			),
			50 => 
			array (
				'code' => 'CU',
				'en' => 'Cuba',
				'de' => 'Kuba',
			),
			51 => 
			array (
				'code' => 'CV',
				'en' => 'Cape Verde',
				'de' => 'Kap Verde',
			),
			52 => 
			array (
				'code' => 'CX',
				'en' => 'Christmas Island',
				'de' => 'Weihnachtsinsel',
			),
			53 => 
			array (
				'code' => 'CY',
				'en' => 'Cyprus',
				'de' => 'Zypern',
			),
			54 => 
			array (
				'code' => 'CZ',
				'en' => 'Czech Republic',
				'de' => 'Tschechische Republik',
			),
			55 => 
			array (
				'code' => 'DE',
				'en' => 'Germany',
				'de' => 'Deutschland',
			),
			56 => 
			array (
				'code' => 'DJ',
				'en' => 'Djibouti',
				'de' => 'Dschibuti',
			),
			57 => 
			array (
				'code' => 'DK',
				'en' => 'Denmark',
				'de' => 'Dänemark',
			),
			58 => 
			array (
				'code' => 'DM',
				'en' => 'Dominica',
				'de' => 'Dominica',
			),
			59 => 
			array (
				'code' => 'DO',
				'en' => 'Dominican Republic',
				'de' => 'Dominikanische Republik',
			),
			60 => 
			array (
				'code' => 'DZ',
				'en' => 'Algeria',
				'de' => 'Algerien',
			),
			61 => 
			array (
				'code' => 'EC',
				'en' => 'Ecuador',
				'de' => 'Ecuador',
			),
			62 => 
			array (
				'code' => 'EE',
				'en' => 'Estonia',
			'de' => 'Estland (Reval)',
			),
			63 => 
			array (
				'code' => 'EG',
				'en' => 'Egypt',
				'de' => 'Ägypten',
			),
			64 => 
			array (
				'code' => 'EH',
				'en' => 'Western Sahara',
				'de' => 'Westsahara',
			),
			65 => 
			array (
				'code' => 'ER',
				'en' => 'Eritrea',
				'de' => 'Eritrea',
			),
			66 => 
			array (
				'code' => 'ES',
				'en' => 'Spain',
				'de' => 'Spanien',
			),
			67 => 
			array (
				'code' => 'ET',
				'en' => 'Ethiopia',
				'de' => 'Äthiopien',
			),
			68 => 
			array (
				'code' => 'FI',
				'en' => 'Finland',
				'de' => 'Finnland',
			),
			69 => 
			array (
				'code' => 'FJ',
				'en' => 'Fiji',
				'de' => 'Fidschi',
			),
			70 => 
			array (
				'code' => 'FK',
				'en' => 'Falkland Islands',
			'de' => 'Falklandinseln (Malwinen)',
			),
			71 => 
			array (
				'code' => 'FM',
				'en' => 'Micronesia',
				'de' => 'Mikronesien',
			),
			72 => 
			array (
				'code' => 'FO',
				'en' => 'Faroe Islands',
				'de' => 'Färöer',
			),
			73 => 
			array (
				'code' => 'FR',
				'en' => 'France',
				'de' => 'Frankreich',
			),
			74 => 
			array (
				'code' => 'GA',
				'en' => 'Gabon',
				'de' => 'Gabun',
			),
			75 => 
			array (
				'code' => 'GB',
				'en' => 'United Kingdom',
				'de' => 'Großbritannien und Nordirland',
			),
			76 => 
			array (
				'code' => 'GD',
				'en' => 'Grenada',
				'de' => 'Grenada',
			),
			77 => 
			array (
				'code' => 'GE',
				'en' => 'Georgia',
				'de' => 'Georgien',
			),
			78 => 
			array (
				'code' => 'GF',
				'en' => 'French Guiana',
				'de' => 'Französisch-Guayana',
			),
			79 => 
			array (
				'code' => 'GG',
				'en' => 'Guernsey',
			'de' => 'Guernsey (Kanalinsel)',
			),
			80 => 
			array (
				'code' => 'GH',
				'en' => 'Ghana',
				'de' => 'Ghana',
			),
			81 => 
			array (
				'code' => 'GI',
				'en' => 'Gibraltar',
				'de' => 'Gibraltar',
			),
			82 => 
			array (
				'code' => 'GL',
				'en' => 'Greenland',
				'de' => 'Grönland',
			),
			83 => 
			array (
				'code' => 'GM',
				'en' => 'Gambia',
				'de' => 'Gambia',
			),
			84 => 
			array (
				'code' => 'GN',
				'en' => 'Guinea',
				'de' => 'Guinea',
			),
			85 => 
			array (
				'code' => 'GP',
				'en' => 'Guadeloupe',
				'de' => 'Guadeloupe',
			),
			86 => 
			array (
				'code' => 'GQ',
				'en' => 'Equatorial Guinea',
				'de' => 'Äquatorialguinea',
			),
			87 => 
			array (
				'code' => 'GR',
				'en' => 'Greece',
				'de' => 'Griechenland',
			),
			88 => 
			array (
				'code' => 'GS',
				'en' => 'South Georgia and the South Sandwich Islands',
				'de' => 'Südgeorgien und die Südl. Sandwichinseln',
			),
			89 => 
			array (
				'code' => 'GT',
				'en' => 'Guatemala',
				'de' => 'Guatemala',
			),
			90 => 
			array (
				'code' => 'GU',
				'en' => 'Guam',
				'de' => 'Guam',
			),
			91 => 
			array (
				'code' => 'GW',
				'en' => 'Guinea-Bissau',
				'de' => 'Guinea-Bissau',
			),
			92 => 
			array (
				'code' => 'GY',
				'en' => 'Guyana',
				'de' => 'Guyana',
			),
			93 => 
			array (
				'code' => 'HK',
				'en' => 'Hong Kong S.A.R., China',
				'de' => 'Hongkong',
			),
			94 => 
			array (
				'code' => 'HM',
				'en' => 'Heard Island and McDonald Islands',
				'de' => 'Heard- und McDonald-Inseln',
			),
			95 => 
			array (
				'code' => 'HN',
				'en' => 'Honduras',
				'de' => 'Honduras',
			),
			96 => 
			array (
				'code' => 'HR',
				'en' => 'Croatia',
				'de' => 'Kroatien',
			),
			97 => 
			array (
				'code' => 'HT',
				'en' => 'Haiti',
				'de' => 'Haiti',
			),
			98 => 
			array (
				'code' => 'HU',
				'en' => 'Hungary',
				'de' => 'Ungarn',
			),
			99 => 
			array (
				'code' => 'ID',
				'en' => 'Indonesia',
				'de' => 'Indonesien',
			),
			100 => 
			array (
				'code' => 'IE',
				'en' => 'Ireland',
				'de' => 'Irland',
			),
			101 => 
			array (
				'code' => 'IL',
				'en' => 'Israel',
				'de' => 'Israel',
			),
			102 => 
			array (
				'code' => 'IM',
				'en' => 'Isle of Man',
				'de' => 'Insel Man',
			),
			103 => 
			array (
				'code' => 'IN',
				'en' => 'India',
				'de' => 'Indien',
			),
			104 => 
			array (
				'code' => 'IO',
				'en' => 'British Indian Ocean Territory',
				'de' => 'Britisches Territorium im Indischen Ozean',
			),
			105 => 
			array (
				'code' => 'IQ',
				'en' => 'Iraq',
				'de' => 'Irak',
			),
			106 => 
			array (
				'code' => 'IR',
				'en' => 'Iran',
				'de' => 'Iran',
			),
			107 => 
			array (
				'code' => 'IS',
				'en' => 'Iceland',
				'de' => 'Island',
			),
			108 => 
			array (
				'code' => 'IT',
				'en' => 'Italy',
				'de' => 'Italien',
			),
			109 => 
			array (
				'code' => 'JE',
				'en' => 'Jersey',
			'de' => 'Jersey (Kanalinsel)',
			),
			110 => 
			array (
				'code' => 'JM',
				'en' => 'Jamaica',
				'de' => 'Jamaika',
			),
			111 => 
			array (
				'code' => 'JO',
				'en' => 'Jordan',
				'de' => 'Jordanien',
			),
			112 => 
			array (
				'code' => 'JP',
				'en' => 'Japan',
				'de' => 'Japan',
			),
			113 => 
			array (
				'code' => 'KE',
				'en' => 'Kenya',
				'de' => 'Kenia',
			),
			114 => 
			array (
				'code' => 'KG',
				'en' => 'Kyrgyzstan',
				'de' => 'Kirgisistan',
			),
			115 => 
			array (
				'code' => 'KH',
				'en' => 'Cambodia',
				'de' => 'Kambodscha',
			),
			116 => 
			array (
				'code' => 'KI',
				'en' => 'Kiribati',
				'de' => 'Kiribati',
			),
			117 => 
			array (
				'code' => 'KM',
				'en' => 'Comoros',
				'de' => 'Komoren',
			),
			118 => 
			array (
				'code' => 'KN',
				'en' => 'Saint Kitts and Nevis',
				'de' => 'St. Kitts und Nevis',
			),
			119 => 
			array (
				'code' => 'KP',
				'en' => 'North Korea',
				'de' => 'Nordkorea',
			),
			120 => 
			array (
				'code' => 'KR',
				'en' => 'South Korea',
				'de' => 'Südkorea',
			),
			121 => 
			array (
				'code' => 'KW',
				'en' => 'Kuwait',
				'de' => 'Kuwait',
			),
			122 => 
			array (
				'code' => 'KY',
				'en' => 'Cayman Islands',
				'de' => 'Kaimaninseln',
			),
			123 => 
			array (
				'code' => 'KZ',
				'en' => 'Kazakhstan',
				'de' => 'Kasachstan',
			),
			124 => 
			array (
				'code' => 'LA',
				'en' => 'Laos',
				'de' => 'Laos',
			),
			125 => 
			array (
				'code' => 'LB',
				'en' => 'Lebanon',
				'de' => 'Libanon',
			),
			126 => 
			array (
				'code' => 'LC',
				'en' => 'Saint Lucia',
				'de' => 'St. Lucia',
			),
			127 => 
			array (
				'code' => 'LI',
				'en' => 'Liechtenstein',
				'de' => 'Liechtenstein',
			),
			128 => 
			array (
				'code' => 'LK',
				'en' => 'Sri Lanka',
				'de' => 'Sri Lanka',
			),
			129 => 
			array (
				'code' => 'LR',
				'en' => 'Liberia',
				'de' => 'Liberia',
			),
			130 => 
			array (
				'code' => 'LS',
				'en' => 'Lesotho',
				'de' => 'Lesotho',
			),
			131 => 
			array (
				'code' => 'LT',
				'en' => 'Lithuania',
				'de' => 'Litauen',
			),
			132 => 
			array (
				'code' => 'LU',
				'en' => 'Luxembourg',
				'de' => 'Luxemburg',
			),
			133 => 
			array (
				'code' => 'LV',
				'en' => 'Latvia',
				'de' => 'Lettland',
			),
			134 => 
			array (
				'code' => 'LY',
				'en' => 'Libya',
				'de' => 'Libyen',
			),
			135 => 
			array (
				'code' => 'MA',
				'en' => 'Morocco',
				'de' => 'Marokko',
			),
			136 => 
			array (
				'code' => 'MC',
				'en' => 'Monaco',
				'de' => 'Monaco',
			),
			137 => 
			array (
				'code' => 'MD',
				'en' => 'Moldova',
				'de' => 'Moldawien',
			),
			138 => 
			array (
				'code' => 'MG',
				'en' => 'Madagascar',
				'de' => 'Madagaskar',
			),
			139 => 
			array (
				'code' => 'MH',
				'en' => 'Marshall Islands',
				'de' => 'Marshallinseln',
			),
			140 => 
			array (
				'code' => 'MK',
				'en' => 'Macedonia',
				'de' => 'Mazedonien',
			),
			141 => 
			array (
				'code' => 'ML',
				'en' => 'Mali',
				'de' => 'Mali',
			),
			142 => 
			array (
				'code' => 'MM',
				'en' => 'Myanmar',
			'de' => 'Myanmar (Burma)',
			),
			143 => 
			array (
				'code' => 'MN',
				'en' => 'Mongolia',
				'de' => 'Mongolei',
			),
			144 => 
			array (
				'code' => 'MO',
				'en' => 'Macao S.A.R., China',
				'de' => 'Macao',
			),
			145 => 
			array (
				'code' => 'MP',
				'en' => 'Northern Mariana Islands',
				'de' => 'Nördliche Marianen',
			),
			146 => 
			array (
				'code' => 'MQ',
				'en' => 'Martinique',
				'de' => 'Martinique',
			),
			147 => 
			array (
				'code' => 'MR',
				'en' => 'Mauritania',
				'de' => 'Mauretanien',
			),
			148 => 
			array (
				'code' => 'MS',
				'en' => 'Montserrat',
				'de' => 'Montserrat',
			),
			149 => 
			array (
				'code' => 'MT',
				'en' => 'Malta',
				'de' => 'Malta',
			),
			150 => 
			array (
				'code' => 'MU',
				'en' => 'Mauritius',
				'de' => 'Mauritius',
			),
			151 => 
			array (
				'code' => 'MV',
				'en' => 'Maldives',
				'de' => 'Malediven',
			),
			152 => 
			array (
				'code' => 'MW',
				'en' => 'Malawi',
				'de' => 'Malawi',
			),
			153 => 
			array (
				'code' => 'MX',
				'en' => 'Mexico',
				'de' => 'Mexiko',
			),
			154 => 
			array (
				'code' => 'MY',
				'en' => 'Malaysia',
				'de' => 'Malaysia',
			),
			155 => 
			array (
				'code' => 'MZ',
				'en' => 'Mozambique',
				'de' => 'Mosambik',
			),
			156 => 
			array (
				'code' => 'NA',
				'en' => 'Namibia',
				'de' => 'Namibia',
			),
			157 => 
			array (
				'code' => 'NC',
				'en' => 'New Caledonia',
				'de' => 'Neukaledonien',
			),
			158 => 
			array (
				'code' => 'NE',
				'en' => 'Niger',
				'de' => 'Niger',
			),
			159 => 
			array (
				'code' => 'NF',
				'en' => 'Norfolk Island',
				'de' => 'Norfolkinsel',
			),
			160 => 
			array (
				'code' => 'NG',
				'en' => 'Nigeria',
				'de' => 'Nigeria',
			),
			161 => 
			array (
				'code' => 'NI',
				'en' => 'Nicaragua',
				'de' => 'Nicaragua',
			),
			162 => 
			array (
				'code' => 'NL',
				'en' => 'Netherlands',
				'de' => 'Niederlande',
			),
			163 => 
			array (
				'code' => 'NO',
				'en' => 'Norway',
				'de' => 'Norwegen',
			),
			164 => 
			array (
				'code' => 'NP',
				'en' => 'Nepal',
				'de' => 'Nepal',
			),
			165 => 
			array (
				'code' => 'NR',
				'en' => 'Nauru',
				'de' => 'Nauru',
			),
			166 => 
			array (
				'code' => 'NU',
				'en' => 'Niue',
				'de' => 'Niue',
			),
			167 => 
			array (
				'code' => 'NZ',
				'en' => 'New Zealand',
				'de' => 'Neuseeland',
			),
			168 => 
			array (
				'code' => 'OM',
				'en' => 'Oman',
				'de' => 'Oman',
			),
			169 => 
			array (
				'code' => 'PA',
				'en' => 'Panama',
				'de' => 'Panama',
			),
			170 => 
			array (
				'code' => 'PE',
				'en' => 'Peru',
				'de' => 'Peru',
			),
			171 => 
			array (
				'code' => 'PF',
				'en' => 'French Polynesia',
				'de' => 'Französisch-Polynesien',
			),
			172 => 
			array (
				'code' => 'PG',
				'en' => 'Papua New Guinea',
				'de' => 'Papua-Neuguinea',
			),
			173 => 
			array (
				'code' => 'PH',
				'en' => 'Philippines',
				'de' => 'Philippinen',
			),
			174 => 
			array (
				'code' => 'PK',
				'en' => 'Pakistan',
				'de' => 'Pakistan',
			),
			175 => 
			array (
				'code' => 'PL',
				'en' => 'Poland',
				'de' => 'Polen',
			),
			176 => 
			array (
				'code' => 'PM',
				'en' => 'Saint Pierre and Miquelon',
				'de' => 'St. Pierre und Miquelon',
			),
			177 => 
			array (
				'code' => 'PN',
				'en' => 'Pitcairn',
				'de' => 'Pitcairninseln',
			),
			178 => 
			array (
				'code' => 'PR',
				'en' => 'Puerto Rico',
				'de' => 'Puerto Rico',
			),
			179 => 
			array (
				'code' => 'PS',
				'en' => 'Palestinian Territory',
				'de' => 'Palästinensische Autonomiegebiete',
			),
			180 => 
			array (
				'code' => 'PT',
				'en' => 'Portugal',
				'de' => 'Portugal',
			),
			181 => 
			array (
				'code' => 'PW',
				'en' => 'Palau',
				'de' => 'Palau',
			),
			182 => 
			array (
				'code' => 'PY',
				'en' => 'Paraguay',
				'de' => 'Paraguay',
			),
			183 => 
			array (
				'code' => 'QA',
				'en' => 'Qatar',
				'de' => 'Katar',
			),
			184 => 
			array (
				'code' => 'RE',
				'en' => 'Reunion',
				'de' => 'Réunion',
			),
			185 => 
			array (
				'code' => 'RO',
				'en' => 'Romania',
				'de' => 'Rumänien',
			),
			186 => 
			array (
				'code' => 'RU',
				'en' => 'Russia',
				'de' => 'Russische Föderation',
			),
			187 => 
			array (
				'code' => 'RW',
				'en' => 'Rwanda',
				'de' => 'Ruanda',
			),
			188 => 
			array (
				'code' => 'SA',
				'en' => 'Saudi Arabia',
				'de' => 'Saudi-Arabien',
			),
			189 => 
			array (
				'code' => 'SB',
				'en' => 'Solomon Islands',
				'de' => 'Salomonen',
			),
			190 => 
			array (
				'code' => 'SC',
				'en' => 'Seychelles',
				'de' => 'Seychellen',
			),
			191 => 
			array (
				'code' => 'SD',
				'en' => 'Sudan',
				'de' => 'Sudan',
			),
			192 => 
			array (
				'code' => 'SE',
				'en' => 'Sweden',
				'de' => 'Schweden',
			),
			193 => 
			array (
				'code' => 'SG',
				'en' => 'Singapore',
				'de' => 'Singapur',
			),
			194 => 
			array (
				'code' => 'SH',
				'en' => 'Saint Helena',
				'de' => 'St. Helena',
			),
			195 => 
			array (
				'code' => 'SI',
				'en' => 'Slovenia',
				'de' => 'Slowenien',
			),
			196 => 
			array (
				'code' => 'SJ',
				'en' => 'Svalbard and Jan Mayen',
				'de' => 'Svalbard und Jan Mayen',
			),
			197 => 
			array (
				'code' => 'SK',
				'en' => 'Slovakia',
				'de' => 'Slowakei',
			),
			198 => 
			array (
				'code' => 'SL',
				'en' => 'Sierra Leone',
				'de' => 'Sierra Leone',
			),
			199 => 
			array (
				'code' => 'SM',
				'en' => 'San Marino',
				'de' => 'San Marino',
			),
			200 => 
			array (
				'code' => 'SN',
				'en' => 'Senegal',
				'de' => 'Senegal',
			),
			201 => 
			array (
				'code' => 'SO',
				'en' => 'Somalia',
				'de' => 'Somalia',
			),
			202 => 
			array (
				'code' => 'SR',
				'en' => 'Suriname',
				'de' => 'Suriname',
			),
			203 => 
			array (
				'code' => 'ST',
				'en' => 'Sao Tome and Principe',
				'de' => 'São Tomé und Príncipe',
			),
			204 => 
			array (
				'code' => 'SV',
				'en' => 'El Salvador',
				'de' => 'El Salvador',
			),
			205 => 
			array (
				'code' => 'SY',
				'en' => 'Syria',
				'de' => 'Syrien',
			),
			206 => 
			array (
				'code' => 'SZ',
				'en' => 'Swaziland',
				'de' => 'Swasiland',
			),
			207 => 
			array (
				'code' => 'TC',
				'en' => 'Turks and Caicos Islands',
				'de' => 'Turks- und Caicosinseln',
			),
			208 => 
			array (
				'code' => 'TD',
				'en' => 'Chad',
				'de' => 'Tschad',
			),
			209 => 
			array (
				'code' => 'TF',
				'en' => 'French Southern Territories',
				'de' => 'Französische Süd- und Antarktisgebiete',
			),
			210 => 
			array (
				'code' => 'TG',
				'en' => 'Togo',
				'de' => 'Togo',
			),
			211 => 
			array (
				'code' => 'TH',
				'en' => 'Thailand',
				'de' => 'Thailand',
			),
			212 => 
			array (
				'code' => 'TJ',
				'en' => 'Tajikistan',
				'de' => 'Tadschikistan',
			),
			213 => 
			array (
				'code' => 'TK',
				'en' => 'Tokelau',
				'de' => 'Tokelau',
			),
			214 => 
			array (
				'code' => 'TL',
				'en' => 'East Timor',
				'de' => 'Timor-Leste',
			),
			215 => 
			array (
				'code' => 'TM',
				'en' => 'Turkmenistan',
				'de' => 'Turkmenistan',
			),
			216 => 
			array (
				'code' => 'TN',
				'en' => 'Tunisia',
				'de' => 'Tunesien',
			),
			217 => 
			array (
				'code' => 'TO',
				'en' => 'Tonga',
				'de' => 'Tonga',
			),
			218 => 
			array (
				'code' => 'TR',
				'en' => 'Turkey',
				'de' => 'Türkei',
			),
			219 => 
			array (
				'code' => 'TT',
				'en' => 'Trinidad and Tobago',
				'de' => 'Trinidad und Tobago',
			),
			220 => 
			array (
				'code' => 'TV',
				'en' => 'Tuvalu',
				'de' => 'Tuvalu',
			),
			221 => 
			array (
				'code' => 'TW',
				'en' => 'Taiwan',
				'de' => 'Taiwan',
			),
			222 => 
			array (
				'code' => 'TZ',
				'en' => 'Tanzania',
				'de' => 'Tansania',
			),
			223 => 
			array (
				'code' => 'UA',
				'en' => 'Ukraine',
				'de' => 'Ukraine',
			),
			224 => 
			array (
				'code' => 'UG',
				'en' => 'Uganda',
				'de' => 'Uganda',
			),
			225 => 
			array (
				'code' => 'UM',
				'en' => 'United States Minor Outlying Islands',
				'de' => 'Amerikanisch-Ozeanien',
			),
			226 => 
			array (
				'code' => 'US',
				'en' => 'United States',
				'de' => 'Vereinigte Staaten von Amerika',
			),
			227 => 
			array (
				'code' => 'UY',
				'en' => 'Uruguay',
				'de' => 'Uruguay',
			),
			228 => 
			array (
				'code' => 'UZ',
				'en' => 'Uzbekistan',
				'de' => 'Usbekistan',
			),
			229 => 
			array (
				'code' => 'VA',
				'en' => 'Vatican',
				'de' => 'Vatikanstadt',
			),
			230 => 
			array (
				'code' => 'VC',
				'en' => 'Saint Vincent and the Grenadines',
				'de' => 'St. Vincent und die Grenadinen',
			),
			231 => 
			array (
				'code' => 'VE',
				'en' => 'Venezuela',
				'de' => 'Venezuela',
			),
			232 => 
			array (
				'code' => 'VG',
				'en' => 'British Virgin Islands',
				'de' => 'Britische Jungferninseln',
			),
			233 => 
			array (
				'code' => 'VI',
				'en' => 'U.S. Virgin Islands',
				'de' => 'Amerikanische Jungferninseln',
			),
			234 => 
			array (
				'code' => 'VN',
				'en' => 'Vietnam',
				'de' => 'Vietnam',
			),
			235 => 
			array (
				'code' => 'VU',
				'en' => 'Vanuatu',
				'de' => 'Vanuatu',
			),
			236 => 
			array (
				'code' => 'WF',
				'en' => 'Wallis and Futuna',
				'de' => 'Wallis und Futuna',
			),
			237 => 
			array (
				'code' => 'WS',
				'en' => 'Samoa',
				'de' => 'Samoa',
			),
			238 => 
			array (
				'code' => 'YE',
				'en' => 'Yemen',
				'de' => 'Jemen',
			),
			239 => 
			array (
				'code' => 'YT',
				'en' => 'Mayotte',
				'de' => 'Mayotte',
			),
			240 => 
			array (
				'code' => 'ZA',
				'en' => 'South Africa',
				'de' => 'Südafrika',
			),
			241 => 
			array (
				'code' => 'ZM',
				'en' => 'Zambia',
				'de' => 'Sambia',
			),
			242 => 
			array (
				'code' => 'ZW',
				'en' => 'Zimbabwe',
				'de' => 'Simbabwe',
			),
		));
	}

}
