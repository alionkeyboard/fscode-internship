<?php

$number=$_GET['price'];

echo "Daxil etdiyiniz reqem - ".$number;

echo "<br>";
$floor=(int)$number;
$a=$number-$floor;

echo "Asagi natural edede tamamlamaq ucun  ".$a." qeder lazimdir";



echo "<br>";
$ceil=(int)$number+1;
$b=$ceil-$number;
echo "Yuxari natural edede tamamlamaq ucun  ".$b." qeder lazimdir";





?>