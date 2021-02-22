<?php 
$array = ['eded',['kitab','defter'],[1,11],'Baki'];

function singleArray($array)
{
	$netice = array();// donduruulecek arrayi teyin ed.
	if (!is_array($array)) {
		$array = func_get_args();// arraydaki parametrlerin sayi
	}
	foreach ($array as $key => $value) {
		if (is_array($value)) {
			$netice = array_merge($netice, singleArray($value));//arraylari birlesdirili
			
		}else {
			 $netice = array_merge($netice, array($key=>$value));//array olmayib yeniden array yaranan parametrlerin birlesdirilmesi
			 
		}
	}
	return $netice;
}
print_r(singleArray($array));




 ?>