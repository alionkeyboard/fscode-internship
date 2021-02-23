<?php
$input = "";
$floor = "";
$fraction_1 = "";
$fraction_2 = "";
$ceil = "";
function floorNum ( $decimal )
{
	return (int) $decimal;
}

function ceilNum ( $decimal )
{
	$floor = (int) $decimal;

	return $floor + 1;
}

function fraction1 ( $decimal )
{
	$floor = (int) $decimal;

	return $decimal - $floor;
}

function fraction2 ( $decimal )
{
	$floor = (int) $decimal;
	$ceil  = $floor + 1;

	return $ceil - $decimal;
}

$error = "";
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' )
{
	if ( empty( $_POST[ 'number' ] ) )
	{
		$error = "Cant be empty!";

	}
	else
	{
		$input      = $_POST[ 'number' ];
		$floor      = floorNum( $input );
		$ceil       = ceilNum( $input );
		$fraction_1 = fraction1( $input );
		$fraction_2 = fraction2( $input );
	}
}
?>