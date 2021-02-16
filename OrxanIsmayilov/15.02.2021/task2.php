<?php 

function inArray($search, $array){
    foreach($array as $v) {
        if($search == $v) {
            return "Daxil etdiyiniz seher: <b>$search</b> siyahida movcuddur !";
        }
    }

    return "Daxil etdiyiniz seher: <b>$search</b> siyahida movcud deyil !";
}

$seherler = ['Baku', 'Moscow', 'London', 'Istanbul'];
$axtar1= 'Baku';
$axtar2 = 'Prague';
print(inArray($axtar1, $seherler));
