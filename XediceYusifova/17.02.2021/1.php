<?php

/**
 * 1) Qəpiyi atanda hansı üzünün düşdüyünü göstərən funksiya.
 * Burda ehtimal 50%-dir.
 * Funksiya hər dəfə  təsadüfi olaraq bu iki cavabdan birini qaytarmalıdır. Nümunə:
 */

$result = [ "Xəritə", "Pilləkən" ][ random_int( 0, 1 ) ];
echo "Qəpiyin $result üzü düşdü.";