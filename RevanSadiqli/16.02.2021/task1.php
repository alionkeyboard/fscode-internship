<?php 

    function arr_cedvel( $arr ) {
    // arr_cedvel writes the array to the table
       echo "<table border = 1>
            <tr>
              <th>Ad, Soyad</th>
              <th>Yas</th>
              <th>Cins</th>
            </tr>";
       for ( $row = 0; $row < sizeof($arr); $row++ ) {
       //reading array by using row and column
         echo "<tr>";
         for ( $col = 0; $col < 3; $col++ ) {//column
            echo "<td>".$arr[$row][$col]."</td>";  
         }
         echo "</tr>";
       }
       echo "</table>";
    }

    
    function yas_ortalamasi( $arr ){
    /* yas_ortalamasi sums all elements in the "yas" column
    and dividing by the number of elements in the array */
      $yasortalamasi = 0;
      for ($row = 0; $row < sizeof( $arr ); $row++) {
         $yasortalamasi += $arr[ $row][ 1 ];//
      }
      $yasortalamasi /= sizeof( $arr );
      return ceil($yasortalamasi);
    }


    function yas_boyuk($arr){
    /*yas_boyuk compares array[1] [1] with all elements 
    in the array and returns the maximum value of the 
    element in the array
    */
      $yasboyuk=$arr[1][1];
      $adboyuk =" ";
      for ($row = 0; $row < sizeof($arr); $row++) {
         if($arr[$row][1] > $yasboyuk){
               $yasboyuk=$arr[$row][1];
               $adboyuk=$arr[$row][0];
         } 
      }
      return $adboyuk;
    }


    function yas_kicik($arr){
    /*yas_kucuk similar to the yas_boyuk function,
    it returns the smallest element in the array*/
      $yaskicik=$arr[1][1];
      $adkicik =" ";
      for ($row = 0; $row < sizeof($arr); $row++) {
         if($arr[$row][1] < $yaskicik){
               $yaskicik=$arr[$row][1];
               $adkicik=$arr[$row][0];
         } 
      }
      return $adkicik;
    }


    function oglan_sayi($arr){
    /*aglan_sayi counts elements 
    that are equal to "k"*/
      $sayK=0;
      for ($row = 0; $row < sizeof($arr); $row++) {
          if($arr[$row][2]== "k" ){
              $sayK+=1;
          }
      }
      return $sayK;
    }


    function qiz_sayi($arr){
    // similar to the oglan_sayi 
      $sayQ=0;
      for ($row = 0; $row < sizeof($arr); $row++) {
          if($arr[$row][2]== "q" ){
              $sayQ+=1;
          }
      }
      return $sayQ;
    }


    function sinif_sayi($arr){
      return sizeof($arr);
    }


    $array = array (
             array("Nermin Eliyeva",10,"q"),
             array("Kamil Rahimli",22,"k"),
             array("Zaur Qurbaneliyev",12,"k"),
             array("Melahet Isgenderli",39,"q"),
             array("Ali Rzayev",13,"k"),
             array("Ramin Orucov",52,"k"),
             array("Veli Kerimli",14,"k"),
             array("Zamiq Aliyev" ,3,"k"),
             array("Esmaye Mustafayeva" ,12,"q"),
             array("Veli KERIMLI" ,51,"k")
             );

      arr_cedvel($array);
      echo "Sinifdeki oglanlarin sayi: ".oglan_sayi($array)."<br>";
      echo "Sinifdeki qizlarin sayi: ".qiz_sayi($array)."<br>";
      echo "Sinifdeki usaqlarin umumi yas ortalamasi: ".yas_ortalamasi($array)."<br>";
      echo "Sinifdeki en boyuk usaq: ".yas_boyuk($array)."<br>"."Sinifdeki en kicik usaq: ".yas_kicik($array);
      echo "<br>"."Sinifdeki usaqlarin umumi sayi: ".sinif_sayi($array);
?>