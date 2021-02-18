<?php

echo "<table border='0'>"; 

      for($row=1;$row<=8;$row++){
          echo "<tr>";

          for($col=1;$col<=8;$col++){
          $total=$row+$col;

          if($total%2==0){
          echo "<td height=30px width=30px bgcolor=#DEB887></td>";
          
          }else{

          echo "<td height=30px width=30px  bgcolor=#D2691E></td>";
          }
        }
          echo "</tr>";
    }

    ?>