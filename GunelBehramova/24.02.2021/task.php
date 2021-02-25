<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>My HTML Form</title>

<style type="text/css">
.blogdesire-body{
	min-height: 99vh;
	font-family: 'Grenze', serif;
}
.blogdesire-wrapper{
   padding: 20px;
   width: 100%;
   margin: auto;
   box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);
   background: #fff;
   border-radius: 12px;
   max-width: 700px;
   position: relative;
}
.blogdesire-heading{
  display: block;
  text-align: center;
  font-size: 30px;
  color: #6944ff;
}
.blogdesire-form{
 
}
.blogdesire-form input{
  width: 96%;
  border: 1px solid #6944ff;
  color: #6944ff;
  padding: 2%;
  border-radius: 20px;
  margin-top: 15px;
  font-family: 'Grenze', serif;
}

.blogdesire-form textarea{
  width: 96%;
  border: 1px solid #6944ff;
  color: #6944ff;
  padding: 2%;
  border-radius: 20px;
  margin-top: 15px;
  font-family: 'Grenze', serif;
}
.blogdesire-form input:last-child{
  background: #6944ff;
  color: #fff;
  width: 20%;
}
</style>



</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      My HTML Form

    </div>
    <form class="blogdesire-form" method="post">

    	<label>Email:</label>
		<input type="text" name="email" placeholder="example@yahoo.com"><br><br><br>

		<label>Message:</label>
    	<textarea name="message" rows="5" cols="30"></textarea><br>
    	<input type="submit" name="submit" value="Submit">
</form>

  </div>


<?php

if(isset($_POST['submit'])){
$email = $_POST['email']." ". "|";
$message = $_POST['message']." ". "<br>";
$file=fopen("myfile.txt", "a");
fwrite($file, $email);
fwrite($file, $message);
fclose($file);
}


echo "<br>" . file_get_contents( "myfile.txt" )  ; 


?>

</body>
</html>
