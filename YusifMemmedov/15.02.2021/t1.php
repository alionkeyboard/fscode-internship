<?php

function ayir($simvol=':', $metn='Ali:Rzayev:2000:ADPU'){
    $arr = [];  //chap olunacaq array
    $ara = '';  //stringden oxudughumuz herfleri yighmaq uchun 
    $i=0;
    
    while(isset($metn[$i])){
        
        if($metn[$i]!==$simvol){ 
            /*
             * deyishenin verilmish simvol olmadighi hallarda
             * oxudumuz ishareleri yighiriq
             */
            $ara .= $metn[$i];
            
        }else{
            /*
             * simvola catdiqda
             * yigilmish stringi arraya yaziriq
             * ve yighilmish stringi boshaldiriq
             */
            $arr[] = $ara;
            $ara = '';
        }
        
        $i++;
    }
    
    /*
     * stringin son char-i verilmish simvol olmasa
     * yighilmish herfler arraya yazilmir
     * arraya yazilmamish yighilmishlari varsa yaziriq
     */
    if(!empty($ara)){
        $arr[] = $ara;
    }
    
    echo '<pre>';
    print_r($arr);
    echo '<br>';
    echo '</pre>';
}

ayir();
ayir('a');
?>
