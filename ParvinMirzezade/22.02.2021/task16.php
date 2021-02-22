
	<?php 

if ($_POST) {
	
	$email = $_POST['email'];

 echo "ugurlu";
 die();
	}

elseif (!$email) {
	
	echo "Emaili daxil edin";
	 die();

	}

	
	elseif ($email == '@ " " @') {
		echo "Email deyil";
		 die();
	}



else {

	 
		echo '<center>
					<form method="post" action="#">           
        				<input type="email" name="email" placeholder="email"></br></br>  
        				<button type="submit" value="submit">Send email</button></br></br>
        			</form>
			</center>';

}
?>


