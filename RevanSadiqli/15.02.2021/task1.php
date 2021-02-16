<?php 
  function strtoarr( $metn , $simvol ) {
      $arr = [];
      $herf =  "";

	  for ( $i = 0, $j = 0; isset( $metn[ $j ] ) ; $j++ ) {

        if ( $metn[ $j ] != $simvol ) {
          $herf .= $metn[ $j ]; 
        }

        $arr[ $i ] = $herf;

        if ( $metn[ $j ] == $simvol ) {
          $i += 1;
          $herf =  "";
        }  

      }

      print_r( $arr );
      echo "<br>";
  }
      strtoarr("Ravan:Sadigli:1999:AU",":");
      strtoarr("15.02.2021",".");
?>