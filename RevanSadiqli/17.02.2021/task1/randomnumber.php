<?php

$correct1 = 0;
$correct2 = 0;
$correct3 = 0;

function randNum ()
{
	$rand1 = rand( 0, 255 );//random number to 255
	$rand2 = rand( 0, 255 );//for rgb generating 3 random number
	$rand3 = rand( 0, 255 );
	$array = [ $rand1, $rand2, $rand3 ];
	$check = $array[ rand( 0, count( $array ) - 1 ) ];

	return $check;
}

$correct1 = randNum();//correct answers
$correct2 = randNum();
$correct3 = randNum();

function divRand ()
{
	global $correct1;
	global $correct2;// accesing the variable inside the function
	global $correct3;
	$output1 = "<div class='col-md-3'>
                 <input type='radio' name='color' value='firstc' required>
                 <span class='dot' style='background-color:rgb(" . randNum() . "," . randNum() . "," . randNum() . ");'></span>
                </div>";//generetaing random divs for different colors
	$output2 = "<div class='col-md-3'>
                 <input type='radio' name='color' value='secondc' required>
                 <span class='dot' style='background-color:rgb(" . randNum() . "," . randNum() . "," . randNum() . ");'></span>
                </div>";
	$output3 = "<div class='col-md-3'>
                 <input type='radio' name='color' value='correct' required>
                 <span class='dot' style='background-color:rgb(" . $correct1 . "," . $correct2 . "," . $correct3 . ");'></span>
                </div>";
	$output4 = "<div class='col-md-3'>
                 <input type='radio' name='color' value='fourthc' required>
                 <span class='dot' style='background-color:rgb(" . randNum() . "," . randNum() . "," . randNum() . ");'></span>
                </div>";//by using this method, esaily can add color
	$output5 = $output3;
	$output6 = $output5;

	$divs     = [ $output1, $output2, $output3, $output4, $output5, $output6 ];//divs inserted to the array
	$randKeys = array_rand( $divs, 2 );                                        // random divs
	echo $divs[ $randKeys[ 0 ] ];                                              // one of the random div
	echo $divs[ $randKeys[ 1 ] ];
}

function callSumbit ()
{
	if ( isset( $_POST[ 'color' ] ) )
	{
		$color = $_POST[ 'color' ];
	}
	if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" )
	{
		if ( isset( $_POST[ "find" ] ) )
		{
			if ( $color === "correct" )
			{//if value is correct, game won
				echo "<center><div class='alert alert-success' role='alert' style='width:50%'>
                     <strong>Congratulation</strong>
                     You won the game</div></center>";
			}
			else
			{//other, game lost
				echo "<center><div class='alert alert-warning' role='alert' style='width:50%'>
                    <strong>Keep trying</strong> You lost the game</div></center>";
			}
		}
	}
}

callSumbit();
?>