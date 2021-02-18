<?php 
$array = ['adi'=> 'Suleyman',
		'vezifesi'=>'junior',
		'muddet'=>'1 ay' ];

function element($array,$index)
{
	$array = array_values($array);
	echo $array[$index];			
}
element ($array, 2)


?>
