<?php

$pattern=$_GET['text'];
$text=$_GET['textarea'];


preg_match_all($pattern, $text, $hashtweet);

print_r($hashtweet);


?>