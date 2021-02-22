<?php

$eded1 = 15;
$eded2 = -8;
$eded3 = 0;
$eded4 = 'A4';

function CheckNumber($number) {
  if ($number > 0)
    {$message = "$number musbet ededdir.";}
  if ($number == 0)
    {$message = "0 daxil etmisiniz.";}
  if ($number < 0)
    {$message = "$number menfi ededdir.";}
if (!is_numeric($number))
    {$message = "daxil etdiyiniz deyer eded deyil.";}
  echo $message."<br>";
}


CheckNumber($eded1);
CheckNumber($eded2);
CheckNumber($eded3);
CheckNumber($eded4);

?>