<?php
function divideString($str,$symbol)
{
    $arr = array();
    $tempString = "";
    $j = 0;
    for($i = 0; isset($str[$i]); $i++)
    {
        if($str[$i] != $symbol)
        {
            $tempString = $tempString.$str[$i];
        }
        else
        {
            if(empty($arr))
            {
                
                $arr[0] = $tempString;
            }
            else
            {
                $arr[$j+1] = $tempString;
                $j++;

            }
            
            $tempString = "";
        }
    }
    $arr[$j+1] = $tempString;
    
    for($i = 0; $i<count($arr); $i++)
    {
        echo $arr[$i]."\n";
    }
}

$str_1 = "14.02.2021";
$str_2 = "Ali:Rzayev:2000:ADPU";
$str_3 = "Kamran/Kamilli/1997/BAU";

$symbol_1 = ".";
$symbol_2 = ":";
$symbol_3 = "/";

divideString($str_3,$symbol_3);
?>