<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  
   <table width="350px" cellspacing= "0px" cellpadding="0px">
   <!-- xana genişliyin 350 px nəzərdə tuturuq ve xanalar arası mesafeni sıfır qəbul edirik -->
      <?php

      for($row=1;$row <=8;$row++) // xananın sırası müəyyən edək
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)  //xananın sütunun təyin edək
		  {
          $total=$row+$col;  // xanaların rənginin müxtəlif rəngdə olmasını təmin edək.
          if($total%2==0) 
		  {
          // əgər sira və sutunun cəmi cüt ədəddirsə həmin xananın açıq qəhvəyi rəngdə olsun.
          echo "<td height=40px width=40px bgcolor=#e6ccb3></td>";
          }
		  else
		  {    // əgər sira və sutunun cəmi cüt ədəddirsə həmin xananın  qəhvəyi rəngdə olsun.
          echo "<td height=40px width=40px bgcolor=#86592d></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>