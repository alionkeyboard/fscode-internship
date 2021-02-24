<?php

function ciper($num,$str,$alphabet)
{
    $str = mb_str_split(mb_strtolower($str));
    for($i=0; isset($str[$i]); $i++)
    {
        for($j=0; $j<count($alphabet); $j++)
        {
            
            if($alphabet[$j]==$str[$i])
            {
                $str[$i] = $alphabet[($j+$num)%count($alphabet)];
                break;
            }
        } 
    }
    return $str;
}

$alphabet = ['a','b','c','ç','d','e','ə','f','g','ğ','h','x','ı','i','j','k','q','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z'];
$error = "";
$result = [];
if(isset($_POST['submit']))
{
    if(empty($_POST['textarea']) || empty($_POST['number']))
    {
        $error = "Number and text cant be empty";
    }
    else
    {
        $inputNumber = $_POST['number'];
        $inputText = $_POST['textarea'];
        $result = ciper($inputNumber,$inputText,$alphabet);
    }
    
}

?>