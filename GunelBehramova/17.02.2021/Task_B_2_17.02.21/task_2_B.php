<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
</head>
<body>

  <form method="POST">
  <h2>Please input your number:</h2>

  <label>Number:</label>
  <input type= "number" step="0.01" name="number">
  <input type="Submit" value="Submit Number">

</form>

<?php

$number = $_POST['number'];

function extractFraction ($value) 
{
    $fraction   = $value - floor ($value);
    if ($value < 0)
    {
        $fraction *= -1;
    }

    return $fraction;
}

$kesr = extractFraction ($number);

$tam = $number - $kesr;

$maxTam = $tam + 1;

$nextKesr = 1 - $kesr;

echo "<h3> Istifadecinin daxil etdiyi eded: $number </h3>";
echo "<h3> Natural eded < x: $tam ( $kesr ) </h3>";
echo "<h3> Natural eded > x: $maxTam ( $nextKesr ) </h3>";

?>
</body>
</html> 