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
    function movcuddur($olke, $olkeler){

      foreach($olkeler as $hazirki){

        if($hazirki==$olke){
          return true;
        }
        
      }
          return false;
    }

    $olkeler = array("Ispaniya","Italiya","Ingiltere","Portuqaliya");
    $olke = "Iran";
    if(movcuddur($olke, $olkeler)){
      echo "true";
    }
    else{
      echo "false";
    }

  ?>
</body>
</html>