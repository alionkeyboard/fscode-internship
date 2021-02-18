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
  //sol ve asagidaki reqem/herflerin baslangici
  $numbers = 8;
  $chars = "a";

echo "<table>";
  for($setir=0; $setir<9; $setir++){

    echo "<tr>";

    for($sutun=0; $sutun<9; $sutun++){
      //ilk sutunda ancaq reqemler olsun ve 8den 1-e qeder davam etsin
      if($sutun==0 && $numbers!=0){
        echo "<td style='border: 1px solid;height:90px;width:90px;font-size:20px;text-align:center;background-color:grey'> $numbers </td>";
        $numbers--;
        continue;
      }

      //son setir ancaq herfler olsun ve 1-ci (0 bos qalsin) sutundan baslasin
      if($setir==8 && $sutun!=0){
        echo "<td style='border: 1px solid;height:90px;width:90px;font-size:20px;text-align:center;background-color:grey'> $chars </td>";
        $chars++;
        continue;
      }

      $cem = $setir+$sutun;
      if($cem%2==0){
        $color = "#fff";
      }

      else{
        $color = "#000";
      }
      echo "<td style='border: 1px solid;height:90px;width:90px;background-color:".$color."'> </td>";
    }
    echo "<br>";
    echo "</tr>";
  }
  echo "</table>";
  ?>
  
</body>
</html>