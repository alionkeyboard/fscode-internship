<?php

function ceilFloorNumber($number){
    $floor="";
    $remain="";
    if(isset($number)){
        $floor = (Int) $number; //floor-asagi yuvarlaqlasdirma
        $remain = $number - $floor; // kesr hisse
        $ceil = $floor; 
        if($ceil<$number){ //yuxari yuvarlaqlasdirma
            $ceil++;
        }

        $remainCeil = number_format(($ceil-$number), 2);// kesr hisse
        header("location:view.php?floor=$floor&remain=$remain&ceil=$ceil&remainCeil=$remainCeil");
    }
    
}

if(isset($_GET['number'])){
    print_r(ceilfloorNumber($_GET['number']));
}

