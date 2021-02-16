<?php 
//array containig elements 
$seherler=['Baku','Moscow','london', 'Istanbul'];
  
//search element 
$axtar1 = 'Prague';
$axtar2 = 'Baku';


//Seraching $axtar1
if(in_array($axtar1, $seherler)){ 
	
    //the item is there 
    echo '$axtar1'. '-'."true"; 
}else{ 
    //the item isn't there 
    echo '$axtar1'. '-'."false"; 
}

echo '<br>';

//Seraching $axtar2
if(in_array($axtar2, $seherler)){ 
	
    //the item is there 
    echo '$axtar2'. '-'."true"; 
}else{ 
    //the item isn't there 
    echo '$axtar2'. '-'."false"; 
}

?>