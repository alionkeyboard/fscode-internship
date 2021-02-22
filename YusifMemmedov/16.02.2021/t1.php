<?php

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

$sinif = [
	[ 'name' => 'Gulay', 'age' => 10, 'gender' => 'q' ],
	[ 'name' => 'Nuray', 'age' => 11, 'gender' => 'q' ],
	[ 'name' => 'Amin', 'age' => 13, 'gender' => 'k' ],
	[ 'name' => 'Huseyn', 'age' => 9, 'gender' => 'k' ],
	[ 'name' => 'Huseyn', 'age' => 9, 'gender' => 'k' ],
	[ 'name' => 'Xadica', 'age' => 15, 'gender' => 'q' ],
	[ 'name' => 'Samir', 'age' => 15, 'gender' => 'k' ],
	[ 'name' => 'Nahid', 'age' => 11, 'gender' => 'k' ],
	[ 'name' => 'Nizam', 'age' => 12, 'gender' => 'k' ],
	[ 'name' => 'Elnaz', 'age' => 10, 'gender' => 'q' ],
	[ 'name' => 'Shabnam', 'age' => 10, 'gender' => 'q' ]
];

function tehlil ( $shagirdler )
{

	$boyukler  = [];      //yashlari beraber olan boyuk yashlilari yighmaga
	$kicikler  = [];      //yashlari beraber olan kicik yashlilari yighmaga
	$cemi_yash = 0;       //shagirdlerin yashlarini toplamagha
	$umumi_say = 0;       //sayghac
	$qiz       = 0;       //saygac
	$oghlan    = 0;       //sayghac

	$boyuk = $shagirdler[ '0' ]; //ilk shagirdi boyuk ya da kicik qebul edib bashlayiriq
	$kicik = $shagirdler[ '0' ];

	foreach ( $shagirdler as $shagird )
	{

		$cemi_yash += $shagird[ 'age' ];
		$umumi_say++;

		if ( $shagird[ 'gender' ] === 'q' )
		{
			$qiz++;
		}
		else
		{
			$oghlan++;
		}

		//boyuk shagirdleri teyin edirik
		if ( $boyuk[ 'age' ] === $shagird[ 'age' ] )
		{
			$boyukler[] = $shagird; //yashi boyuk shagirdin yashina beraber olan shagirdleri saxlayiriq
		}
		else if ( $shagird[ 'age' ] > $boyuk[ 'age' ] )
		{
			//eger qebul etdiyimiz boyukden daha boyuk shagird tapsaq
			//onu boyuk elan edib movcud $boyukler arrayini boshaldib yeni shagirdleri yigiriq
			$boyuk    = $shagird;
			$boyukler = [ $shagird ];
		}

		//boyuk shagirdleri tapmaq uchun etdiyimiz prosesle oxshar ishler
		if ( $kicik[ 'age' ] === $shagird[ 'age' ] )
		{
			$kicikler[] = $shagird;
		}
		else if ( $shagird[ 'age' ] < $kicik[ 'age' ] )
		{
			$kicik    = $shagird;
			$kicikler = [ $shagird ];
		}

	}

	//neticeni array olaraq qaytaririq
	return [
		'en_kicik'         => $kicikler,
		'en_boyuk'         => $boyukler,
		'orta_yash'        => $cemi_yash / $umumi_say,
		'qizlarin_sayi'    => $qiz,
		'oghlanlarin_sayi' => $oghlan
	];

}

//bu neticeni ashagidaki html ile chap edeceyik
$netice = ( tehlil( $sinif ) );
?>


<html>
	<head>
		<style>
            table {
                width: 90%;
            }

            th {
                background-color: blue !important;
                color: white;
                height: 40px;
                font-size: 24px;
            }

            td {
                text-align: center;
                width: 33%;
            }

            tr:nth-child(odd) {
                background-color: beige;
            }
		</style>
	</head>

	<body>
		<table>
			<tbody>
				<tr>
					<th>Ad</th>
					<th>Yash</th>
					<th>Cins</th>
				</tr>
				<?php

				//parametr olaraq kechireceyimiz $sinif arrayinin chapi
				foreach ( $sinif as $shagird )
				{
					echo "<tr><td>" . $shagird[ 'name' ] . "</td><td>" . $shagird[ 'age' ] . "</td><td>" . $shagird[ 'gender' ] . "</td></tr>";
				}

				?>
			</tbody>

			<tbody>
				<tr>
					<th colspan=3>Yashda kicik olanlar</th>
				</tr>
				<?php

				foreach ( $netice[ 'en_kicik' ] as $shagird )
				{
					echo "<tr><td>" . $shagird[ 'name' ] . "</td><td>" . $shagird[ 'age' ] . "</td><td>" . $shagird[ 'gender' ] . "</td></tr>";
				}

				?>
			</tbody>

			<tbody>
				<tr>
					<th colspan=3>Yashda boyuk olanlar</th>
				</tr>
				<?php

				foreach ( $netice[ 'en_boyuk' ] as $shagird )
				{
					echo "<tr><td>" . $shagird[ 'name' ] . "</td><td>" . $shagird[ 'age' ] . "</td><td>" . $shagird[ 'gender' ] . "</td></tr>";
				}

				?>
			</tbody>

			<tbody>
				<tr>
					<th colspan=3>Diger gostericiler</th>
				</tr>
				<?php
				echo "<tr><td>Orta yash: " . $netice[ 'orta_yash' ] . "</td><td>Qizlarin sayi: " . $netice[ 'qizlarin_sayi' ] . "</td><td>Oghlanlarin sayi: " . $netice[ 'oghlanlarin_sayi' ] . "</td></tr>";
				?>
			</tbody>
		</table>

	</body>
</html>











