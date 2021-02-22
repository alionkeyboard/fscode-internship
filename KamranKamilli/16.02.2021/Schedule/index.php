<?php

$persons = [
	[
		'fullname' => 'Kamran Kamilli',
		'age'      => "23",
		'gender'   => "K"
	],
	[
		'fullname' => 'Zaur Talibli',
		'age'      => "24",
		'gender'   => "K"
	],
	[
		'fullname' => 'Aytac Aghalarova',
		'age'      => "22",
		'gender'   => "Q"
	],
	[
		'fullname' => 'Narmin Aliyeva',
		'age'      => "12",
		'gender'   => "Q"
	],
	[
		'fullname' => 'Kamil Rahimli',
		'age'      => "13",
		'gender'   => "K"
	],
	[
		'fullname' => 'Ramin Orucov',
		'age'      => "10",
		'gender'   => "K"
	],
	[
		'fullname' => 'Ramin Orucov',
		'age'      => "10",
		'gender'   => "K"
	],
	[
		'fullname' => 'Veli Kerimli',
		'age'      => "15",
		'gender'   => "K"
	],
	[
		'fullname' => 'Feride Agayeva',
		'age'      => "30",
		'gender'   => "Q"
	]
];
function averageAge ( $persons )
{
	$average = 0;
	$sum     = 0;
	foreach ( $persons as $p )
	{
		$age = $p[ 'age' ];
		$sum = $sum + $age;
	}
	$average = $sum / count( $persons );

	return $average;
}

function numberOfPeople ( $persons )
{
	return count( $persons );
}

function eldestPerson ( $persons )
{
	$max  = 0;
	$name = "";
	foreach ( $persons as $p )
	{
		if ( $p[ 'age' ] > $max )
		{
			$max  = $p[ 'age' ];
			$name = $p[ 'fullname' ];
		}
	}

	return $name;
}

function youngestPerson ( $persons )
{
	$min  = $persons[ 0 ][ 'age' ];
	$name = "";
	foreach ( $persons as $p )
	{
		if ( $p[ 'age' ] < $min )
		{
			$min  = $p[ 'age' ];
			$name = $p[ 'fullname' ];
		}
	}

	return $name;
}

function numberOfMale ( $persons )
{
	$count = 0;
	foreach ( $persons as $p )
	{
		if ( $p[ 'gender' ] == "K" || $p[ 'gender' ] == "k" )
		{
			$count++;
		}
	}

	return $count;
}

function numberOfFemale ( $persons )
{
	$count = 0;
	foreach ( $persons as $p )
	{
		if ( $p[ 'gender' ] == "Q" || $p[ 'gender' ] == "q" )
		{
			$count++;
		}
	}

	return $count;
}

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Schedule</title>
	</head>

	<body>
		<section>
			<table border="1" width="900px">
				<tr>
					<th>Name,Surname</th>
					<th>Age</th>
					<th>Gender</th>
				</tr>
				<?php foreach ( $persons as $p ) { ?>
					<tr style="text-align: center">
						<td style="text-align:left"><?php echo $p[ 'fullname' ] ?></td>
						<td><?php echo $p[ 'age' ] ?></td>
						<td><?php echo $p[ 'gender' ] ?></td>
					</tr>
				<?php } ?>
			</table>
			<br>
			<div style="font-size:20px; ">
				<?php
				echo "<div id='male'>The number of male is " . numberOfMale( $persons ) . "</div>";
				echo "<div id='female'>The number of female is " . numberOfFemale( $persons ) . "</div>";
				echo "<div id='average'>Average age is " . averageAge( $persons ) . "</div>";
				echo "<div id='youngest'>Youngest person is " . youngestPerson( $persons ) . "</div>";
				echo "<div id='eledest'>Eldest person is " . eldestPerson( $persons ) . "</div>";
				echo "<div id='totalNumber'>The number of people is " . numberOfPeople( $persons ) . "</div>";
				?></div>
		</section>
	</body>

</html>