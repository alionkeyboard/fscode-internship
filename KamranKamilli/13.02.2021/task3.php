<?php
function getWordFromString($x, $y, $str)
{
	$i = 0;
	$j = 0;
	$lengthOfStr = 0;
	$result = [];

	//length of the string
	while(isset($str[$lengthOfStr]))
	{
		$lengthOfStr++;
	}

	for($i=0;$i<$lengthOfStr;$i++)
	{
		if($i == $x-1)
		{
			for($j=0;$j<=$y-1;$j++)
			{
				$result[$j] = $str[$i+$j];
			}
		}
	}

	for($i = 0; $i<=$y-1; $i++)
	{
		echo $result[$i];
	}
}

$x = 4;
$y = 6;
$text = "Bu gunluk son tapsiriq.";

print(getWordFromString($x,$y,$text));

?>