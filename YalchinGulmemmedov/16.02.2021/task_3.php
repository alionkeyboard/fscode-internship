<?php

$ar=
[
    'AD'=>
    [
        'Nermin',
        'Kamil',
        'Zaur',
        'Melaher',
        'Ali',
        'Ramin',
        'Veli',
        'Zamiq',
        'Esmaye',
        'Veli'
    ],
    'SOYAD'=>
    [
        'Eliyeva',
        'RAhimli',
        'Qurbaneliyev',
        'Isgederli',
        'Rzayev',
        'Orucov',
        'Kerimli',
        'Aliyev',
        'Mustafayeva',
        'Kerimli'
    ],
    'YAS'=>
    [
        12,
        13,
        12,
        12,
        11,
        10,
        13,
        14,
        12,
        15
    ],
    'CINS'=>
    [
        'q',
        'k',
        'k',
        'q',
        'k',
        'k',
        'k',
        'k',
        'q',
        'k'
    ]
];


//orta yas hesablama kodu
function sumArray($ar) {
    $total = 0;

    foreach ($ar['YAS'] as $value) 
    {
        $total += $value;
    }
    echo "Sinifdeki uşaqlarin umumi yas ortalamasi"." - ".$total/count($ar['YAS']);
}
sumArray($ar);
echo "<br>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////
//Sinifdeki usaqlarin umumi sayi/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function countArray($ar){

    for($i=0;$i<count($ar['AD']);$i++){
        
    }

    echo "Sinifdeki usaqlarin umumi sayi"." - ".$i;
}
countArray($ar);
echo "<br>";






/////////////////////////////////////////////////////////////////////////////////////////////////////////
//Sinifdə ən kiçik və ən böyük uşağın adı, soyadı////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////



function search_max_array($ar){
    $max=0;
    
foreach ($ar['YAS'] as $key=>$val) {
   
    if ($val > $max) 
    {
        $max = $val;
    }
    
}


for($i=0;$i<count($ar['YAS']);$i++){
    
    if($ar['YAS'][$i]==$max)
    {
        echo "Sinifdeki en boyuk usagin yasi - ".$max." .Adi ve Soyadi ".$ar['AD'][$i]."  ".$ar['SOYAD'][$i]."<br>";
    }

}
}


function search_min_array($ar){
 
$min = $ar['YAS'][0];
 
foreach($ar['YAS'] as $key => $val)
{
 
    if($min > $val)
    {
        $min = $val;    
    }

} 

for($i=0;$i<count($ar['YAS']);$i++)
{

    if($ar['YAS'][$i]==$min){
        echo "Sinifdeki en balaca usagin yasi - ".$min." .Adi ve Soyadi ".$ar['AD'][$i]."  ".$ar['SOYAD'][$i]."<br>";
    }

}


}  
search_max_array($ar);
search_min_array($ar);




/////////////////////////////////////////////////////////////////////////////////////////////////////////
//Sinifdəki oğlanların və qızların sayı//////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

function chooseGender($ar){
    
    $k=0;
    $q=0;
    
    for($i=0;$i<count($ar['CINS']);$i++){

        if($ar['CINS'][$i]=="q"){
            $q++;
        }

        else 
        {
            $k++;
        }
        
    }
    echo "Sinifdeki oglanlarin sayi - ".$k."<br>"."Sinifdeki qizlarin sayi - ".$q;
}
chooseGender($ar);

?>