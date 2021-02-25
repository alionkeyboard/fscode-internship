<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" >
    <form  method="post" action="#">
    <div class="row">
            <label for="email">Email:</label>
            <input id="email" type="email" name="email"  >
          </div>
      <div class="row">
      <label for="text">Mesaj:</label>
          <textarea id="text" name="txt"  ></textarea>
        </div>
      
       <button class="btn" type="submit" name="action">Göndər
  </button>
    </form>
</div>

<?php


if(isset($_POST['action'])){
$open=fopen('data.txt','a');
$email=$_POST['email'];
$text=$_POST['txt'];
  fwrite($open,$text . ' | ' );
fwrite($open,$email .'<br>');
fclose($open);
$fayl=fopen("data.txt", "r");
$x=fread($fayl,filesize("data.txt"));
fclose($fayl);

}


?>
   <p style="color: #fff; font-size:18px"><?= $x?></p>




</body>
</html>