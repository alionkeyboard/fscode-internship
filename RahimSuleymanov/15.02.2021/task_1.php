<?php
/**
 * 1) Mətni verilmiş simvoldan hissələrə bölüb array yaradan funksiya. Explode, array_*, strpos, digər string funksiyaları istifadə etmək olmaz.
 */

function myExplode($delimiter,$string)
{
    $loop    = true;
    $n       = 0;
    $element = '';
    $output  = [];
    while ($loop === true)
    {
        if (isset($string[$n]))
        {
            if ($string[$n] != $delimiter)
            {
                $element .= $string[$n];
            }

            if ($string[$n] == $delimiter)
            {
                $output[] = $element;
                $element = '';
            }
            $n++;
        }
        else
        {
            $loop = false;
        }
    }
    return $output;
}

$delimiter  = ':';
$string     = 'Ali:Rzayev:2000:ADPU';

print_r(myExplode($delimiter,$string));

