<?php

function tek_reqem($num)
{
      if ( $num > 0)
      {
      return ($num - 1) % 9 + 1;
      }
      else
      {
          return 0;
      }
}

$eded = 3999;

echo tek_reqem($eded);

?>
