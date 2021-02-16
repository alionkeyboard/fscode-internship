<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    function arrayiCevir($array){
      $yeniArray = array();

      for($i=count($array)-1;$i>=0;$i--){
        $yeniArray[] = $array[$i];
      }

      return $yeniArray;
    }

    $array = array("bir","iki","uc");
    $yeniArray = arrayiCevir($array);

    foreach($yeniArray as $key){
      echo $key."<br>";
    }

  ?>
</body>
</html>