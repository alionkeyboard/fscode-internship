<?php 

  /*Sizə verilən array-də bir torbanın içində hansı rəngdə şarlardan neçə ədəd olduğu göstərilir. Funksiya bu məlumatlara əsasən hansı şarın çıxma ehtimalının nə qədər olduğunu hesablayıb, buna uyğun hər dəfə random cavab göndərməlidir.*/

$arr = [
		'qirmizi'=>16,
		'yasil'  =>6,
		'goy'    =>6
	];
	function hesabla($arr)
	{
	
	$val= array_sum($arr);//valuenin cemi sonraki bolme emeliyatinda laz
	$ar_rand = array_rand($arr); //random cixan sari tapiriq


	if ($ar_rand=='qirmizi') {//sonraki proseslerde her birini faizine gore qiymetlendiririk
		echo "Qirmizi sarin cixma faizi = ". $arr['qirmizi']/$val*100;
		# code...
	}elseif ($ar_rand=='yasil') {
		echo "Yasil sarin cixma faizi = ". $arr['yasil']/$val*100;
		# code...
	}elseif ($ar_rand=='goy') {
		echo "Goy sarin cixma faizi = ". $arr['goy']/$val*100;
		
	}else{
		
	}
}
hesabla($arr);

 ?>