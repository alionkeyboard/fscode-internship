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
    function hisselereBol($metn,$simvol){
      $baslangic = 0;
      $uzunluq = 0;
      $array = array();

      for($i=0;$i<strlen($metn);$i++){

          if($metn[$i]==$simvol){
            $array[] = substr($metn,$baslangic,$uzunluq);
            $baslangic = $i+1;
            $uzunluq = 0;
          }

          else{
            $uzunluq++;
          }

          //sonuncu elementdirse, en sonuncu simvoldan ona qederki elementleri array-e elave et. 
          if($i==strlen($metn)-1){
            $array[] = substr($metn,$baslangic,$uzunluq);
          }

      }
      return $array;
    }
    $array = hisselereBol("Muhammed,Mustafazade,ADNSU,2002",",");

    foreach($array as $key){
      echo $key."<br>";
    }
  ?>
</body>
</html>