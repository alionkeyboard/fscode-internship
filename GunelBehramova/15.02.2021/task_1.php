<?php



$metn = "Ali:Rzayev:2000:ADPU";
$dl = ':';
$arr = [];
$index = 0;


for ($i=0; $i<strlen($metn); $i++)
{
	if ($metn[$i] == $dl){
	
	$index++;
	$arr[] = '';
		
    continue;
	
		
}
  if(!isset($arr[$index]))
  {
	  $arr[] = '';
  }
	$arr[$index].=$metn[$i];
	
	
}


echo '['. '<br>';

foreach($arr as $a){
print_r(" ' ". $a. " ', " . '<br>');
}

echo ']';

?>