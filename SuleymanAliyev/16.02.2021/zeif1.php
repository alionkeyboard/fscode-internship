<?php 


function herfTeyin($herf)
{ 
	if (isset($_POST['submit'])) { //buttonda gonderilen deyeri qebul edir
		if ($_POST['kYaz']) { //eger inputdaki deyer kicik secilibse
			echo strtolower($_POST['boyuk']); //kicik yazdirir
		}elseif ($_POST['iYaz']) { //inputdaki deyer ilk herfi boyuk sec. Boy Yaz
			echo ucfirst($_POST['boyuk']);
		}
		
	}
}
herfTeyin($herf);



 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>ILK </title>
 </head>
 <body>

 	<div>
 		<form action="" method="POST">
 			<input type="text" name="boyuk">
 			<i><input type="radio" name="kYaz">Kiçik hərflə yaz</i>
 			<i><input type="radio" name="iYaz">İlk hərf böyük yaz</i>
 			<button type="submit" name="submit">gonder</button>
 		</form>
 		

 	</div>
 
 </body>
 </html>