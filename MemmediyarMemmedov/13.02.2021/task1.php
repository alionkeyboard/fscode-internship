<?php
$txt=" Bu cümlədə tam-tamına alti söz var ";
$say = 0;
for($i=0;$i < strlen($txt);$i++){
    if($txt[$i]!=' '){
        $say++;
        while($txt[$i]!=' '){
            $i++;
        }
    }

}

echo  $say." "."söz" ;
