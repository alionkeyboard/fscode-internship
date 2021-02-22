<?php
$arr= array(2, 5,1 ,6, 11, 3,);
$max = 0;
for($i=0;$i<count($arr);$i++)
 {
    if ($arr[$i] > $max)
	{
        $max = $arr[$i];
    }
}
echo $max;
?>