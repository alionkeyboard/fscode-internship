<?php

session_start();
ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

function tap ( $num )
{
	$num_asagi  = (int) $num; //integere chevirib keshr hisseden azad eledim
	$num_yuxari = $num_asagi + 1;

	$asagi_ile_ferq  = $num - $num_asagi;
	$yuxari_ile_ferq = $num_yuxari - $num;

	return [
		'num'        => $num,
		'num_asagi'  => $num_asagi . ' (' . $asagi_ile_ferq . ')',
		'num_yuxari' => $num_yuxari . ' (' . $yuxari_ile_ferq . ')'
	];
}

//form imputun qebulu
//neticenin seesiona yazilmasi
//ve esas sehifeye yonlendirme
if ( isset( $_REQUEST[ 'number' ] ) && is_numeric( $_REQUEST[ 'number' ] ) )
{
	$_SESSION[ 'netice' ] = serialize( tap( $_REQUEST[ 'number' ] ) );
}
else
{
	$_SESSION[ 'netice' ] = 'none';
}

header( 'Location: index.php' );
?>