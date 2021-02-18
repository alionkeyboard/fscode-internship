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
    $array = array(array("Nermin Eliyeva",12,"q"),
    array("Kamil Rahimli",13,"k"),
    array("Zaur Qurbaneliyev",12,"k"),
    array("Melahet Isgenderli",12,"q"),
    array("Ali Rzayev",11,"k"),
    array("Ramin Orucov",10,"k"),
    array("Veli Kerimli",13,"k"),
    array("Zamiq Aliyev",14,"k"),
    array("Esmaye Mustafayeva",12,"q"),
    array("Veli Kerimli",15,"k"));

    
    echo yasOrtalama($array);
    print_r(enKicikenBoyuk($array));

    function enKicikenBoyuk($arrays){
      $min = $arrays[0][1];
      $enKicikAdam = $arrays[0][0];
      $max = $arrays[0][1];
      $enBoyukAdam = $arrays[0][0];

      foreach($arrays as $array){

        if($array[1]<$min){
          $min = $array[1];
          $enKicikAdam = $array[0];
        }

        if($array[1]>$max){
          $max = $array[1];
          $enBoyukAdam = $array[0];
        }
      }
      echo $enKicikAdam." ".$enBoyukAdam."<br>";
      return array("En kicik"=>$enKicikAdam,"En boyuk"=>$enBoyukAdam);
    }

    function umumiSay($arrays){
      $count = 0;

      foreach($arrays as $array){
        $count++;
      }

      return $count;
    }

    function yasOrtalama($arrays){
      $yasCem = 0;
      $umumiSay = umumiSay($arrays);

      foreach($arrays as $array){
          $yasCem += $array[1];
      }

      return $yasCem/$umumiSay;
    }

    function oglanQizSaylari($arrays){
      $qizSay = 0;
      $oglanSay = 0;
      $oglanQiz = array("oglan"=>$oglanSay,"qiz"=>$qizSay);

      foreach($arrays as $array){
        if($array[2]=="q"){
          $oglanQiz["qiz"]++;
        }
        else{
          $oglanQiz["oglan"]++;
        }
      }
      
      return $oglanQiz;

    }

  ?>
  
</body>
</html>