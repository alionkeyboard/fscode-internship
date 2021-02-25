<?php 



function pregMatch($pattern,$str){
    $pattern = "/$pattern/i";
    if(preg_match_all($pattern, $str,$all) != 0)
    {
        $all = implode(',',$all[0]);
        return "Netice: ".$all;
    }
    else
    {
        return "Axtardiginiz metne uygun netice tapilmadi!";
    }


}


if(isset($_GET['pattern'])){
    echo pregMatch($_GET['pattern'],$_GET['text']);
}else{
    echo "Zehmet olmasa metni daxil edin";
}

   
