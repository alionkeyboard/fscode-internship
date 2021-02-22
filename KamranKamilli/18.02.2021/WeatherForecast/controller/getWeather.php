<?php

$content = file_get_contents( "https://www.havaproqnozu.com/baki-15-gunluk-hava-veziyyeti-taxmini.html" );

$DOM = new DOMDocument();
$DOM->loadHTML( $content );

$tableHeader = $DOM->getElementsByTagName( 'th' );
$tableDetail = $DOM->getElementsByTagName( 'td' );

//pushing th tag values to the array
foreach ( $tableHeader as $header )
{
	$dataTableHeader[] = trim( $header->textContent );
}

$i = 0;
$j = 0;
//pushing td tag values to the array
foreach ( $tableDetail as $detail )
{
	if ( trim( $detail->textContent ) != "" )
	{
		$dataTableDetail[ $j ][] = trim( $detail->textContent );
		$i                       = $i + 1;
		if ( $i % count( $dataTableHeader ) == 0 )
		{
			$j = $j + 1;
		}
	}
	else
	{
		continue;  // there is an empty td tag in html need to be skipped.
	}

}

//joining above 2 arrays, th tag values as key and td values as array values
// for($i = 0; $i < count($dataTableDetail); $i++)
// {
// 	for($j = 0; $j < count($dataTableHeader); $j++)
// 	{
// 		$tempData[$i][$dataTableHeader[$j]] = $dataTableDetail[$i][$j];
// 	}
// }
// $dataTableDetail = $tempData;
// unset($tempData);
