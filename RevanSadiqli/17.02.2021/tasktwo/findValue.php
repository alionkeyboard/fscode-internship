<?php
  function decNumber ( $value ) {
  /*divide the number into decimals */
    $integer = "";//integer part
    $decimal = "";//decimal part
    $i = 0;// iterate tby $value
    $j = 0;// to calculate decimal part for the $value
    $deczero = "0";//concatenate to 0 for a decimal number

      while ( isset( $value[ $j ] ) ) { //length
        $j++;
      }

      while ( $value[ $i ] != "." ) {// integer part, until accessing the dot
        $integer .= $value[$i];
        $i++;
      }

      while ( $i < $j) {// decimal part, after accesing dot
        $decimal .= $value[$i];
        $i++;
      }

      $deczero .= $decimal;

      $int = (int)$integer;//converting strings to the integers
      $intDec = (float)$deczero;

      $remain = 1 - $intDec; //to make an integer 
      $intToComp = $int+1;//round

    echo "<h5>Integer part:".$integer."<br></h5>";
    echo "<h5>Decimal part:".$deczero."<br></h5>";
    echo "<h5>To complete integer:".$remain."<br></h5>";
    echo "<h5>Round to integer:".$intToComp."<br></h5>";
  }

      function callSumbit(){
         if ( isset( $_POST[ 'number' ] ) ) {
            $num = $_POST[ 'number' ];
         }
           if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
             if ( isset( $_POST["find"] ) ) {
               if( !is_numeric($num) ) {// if posted letters or etc. like "ad?=)(asds)"
                  echo "<div class='style2'>"; 
                  echo "<h5>It is not a number. Please submit float number</h5>";
                  echo "</div>";
               } else if(strpos($num, ".")){//if string contains dot
                  echo "<div class='style2'>"; //normal case
                  echo decNumber($num);
                  echo "</div>";
                }else {
                  $newNum=$num.".0";//if posted integer like "15"
                  echo "<div class='style2'>"; 
                  echo decNumber($newNum);
                  echo "</div>";
                }
             }
           }
      }

         callSumbit();
?>