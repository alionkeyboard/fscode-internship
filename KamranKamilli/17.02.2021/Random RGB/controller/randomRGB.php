<?php

function randomNum ()
{
	return rand( 0, 255 );
}

function randomRGB ()
{
	$red   = randomNum();
	$green = randomNum();
	$blue  = randomNum();

	return [ $red, $green, $blue ];
}

$RGB_1 = randomRGB();
$RGB_2 = randomRGB();
$RGB_3 = randomRGB();
$RGB_4 = randomRGB();

$arrayRGB = [ $RGB_1, $RGB_2, $RGB_3, $RGB_4 ];//set of RGB colors arrays generated randomly, multidemensional array

function randomArrayRGB ()
{
	return rand( 0, 3 );
}

$pickedRandomRGB = $arrayRGB[ randomArrayRGB() ]; // picked random rgb by system from set, for correct answer

//choose random RGB color from set while it is equal to each other, must not be equal to each other, this colors are wrong answer
do
{
	$randomRGB_1 = $arrayRGB[ randomArrayRGB() ];
} while ( $pickedRandomRGB == $randomRGB_1 );
do
{
	$randomRGB_2 = $arrayRGB[ randomArrayRGB() ];
} while ( $randomRGB_2 == $pickedRandomRGB || $randomRGB_2 == $randomRGB_1 );
do
{
	$randomRGB_3 = $arrayRGB[ randomArrayRGB() ];
} while ( $randomRGB_3 == $pickedRandomRGB || $randomRGB_3 == $randomRGB_2 || $randomRGB_3 == $randomRGB_1 );

$buttonArray = [ $pickedRandomRGB, $randomRGB_1, $randomRGB_2, $randomRGB_3 ];
//assign choosen colors to the buttons randomly
$assignToButton_1 = $buttonArray[ randomArrayRGB() ];
do
{
	$assignToButton_2 = $buttonArray[ randomArrayRGB() ];
} while ( $assignToButton_1 == $assignToButton_2 );
do
{
	$assignToButton_3 = $buttonArray[ randomArrayRGB() ];
} while ( $assignToButton_3 == $assignToButton_1 || $assignToButton_3 == $assignToButton_2 );
do
{
	$assignToButton_4 = $buttonArray[ randomArrayRGB() ];
} while ( $assignToButton_4 == $assignToButton_1 || $assignToButton_4 == $assignToButton_2 || $assignToButton_4 == $assignToButton_3 );

echo "correct answer: ";
var_dump( $pickedRandomRGB );
echo "button1 assigned: ";
var_dump( $assignToButton_1 );
echo "button2 assigned: ";
var_dump( $assignToButton_2 );
echo "button3 assigned: ";
var_dump( $assignToButton_3 );
echo "button4 assigned: ";
var_dump( $assignToButton_4 );

$correctAnswer = "";
if ( $assignToButton_1 == $pickedRandomRGB )
{
	$correctAnswer = 'button1';
}
else if ( $assignToButton_2 == $pickedRandomRGB )
{
	$correctAnswer = 'button2';
}
else if ( $assignToButton_3 == $pickedRandomRGB )
{
	$correctAnswer = 'button3';
}
else if ( $assignToButton_4 == $pickedRandomRGB )
{
	$correctAnswer = 'button4';
}

echo "Correct: " . $correctAnswer;
$result = "";

if ( $_SERVER[ "REQUEST_METHOD" ] === 'POST' )
{
	if ( ( isset( $_POST[ 'button1' ] ) && $correctAnswer == "button1" ) || ( isset( $_POST[ 'button2' ] ) && $correctAnswer == "button2" ) || ( isset( $_POST[ 'button3' ] ) && $correctAnswer == "button3" ) || ( isset( $_POST[ 'button4' ] ) && $correctAnswer == "button4" ) )
	{
		$result = "Correct!";
	}
	else
	{
		$result = "Incorrect!";
	}
}

?>