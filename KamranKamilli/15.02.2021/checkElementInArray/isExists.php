<?php

/*print form
function isExist($arr,$value)
{
    for ($i = 0; $i<count($arr); $i++)
    {
        if($arr[$i] == $value)
        {
            echo "True";
            return;
        }
    }
    echo "False";
}*/


//boolean form
function isExist($arr,$value)
{
    for ($i = 0; $i<count($arr); $i++)
    {
        if($arr[$i] == $value)
        {
            return true;
        }
    }
    return false;
}


$cities = ['Baku','Moscow','London','Istanbul'];
$search_1 = "Prague";
$search_2 = "Baku";

(isExist($cities,$search_2)) ? print("True"): print("False");

//isExist($cities,$search_2);
?>