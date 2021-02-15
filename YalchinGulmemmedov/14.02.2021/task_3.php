<?php

function day_month_year ( $month )
{
	$convMonth_1 = $month[ 3 ];
	$convMonth_2 = $month[ 4 ];
	$convMonth   = $convMonth_1 . $convMonth_2;

	for ( $i = 0; $i < 3; $i++ )
	{
		echo $month[ $i ];
	}
	if ( $convMonth == 01 )
	{
		echo "Yanvar";
	}
	else if ( $convMonth == '02' )
	{
		echo "Fevral";
	}
	else if ( $convMonth == '03' )
	{
		echo "Mart";
	}
	else if ( $convMonth == '04' )
	{
		echo "Aprel";
	}
	else if ( $convMonth == '05' )
	{
		echo "May";
	}
	else if ( $convMonth == '06' )
	{
		echo "Iyun";
	}
	else if ( $convMonth == '07' )
	{
		echo "Iyul";
	}
	else if ( $convMonth == "08" )
	{
		echo "Avqust";
	}
	else if ( $convMonth == "09" )
	{
		echo "Sentyabr";
	}
	else if ( $convMonth == '10' )
	{
		echo "Oktyabr";
	}
	else if ( $convMonth == '11' )
	{
		echo "Noyabr";
	}
	else
	{
		echo "Dekabr";
	}
	for ( $i = 5; $i < 10; $i++ )
	{
		echo $month[ $i ];
	}

}

$month = "15-01-1453";
day_month_year( $month );

?>