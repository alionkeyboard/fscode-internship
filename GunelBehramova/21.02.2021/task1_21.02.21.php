<?php

if ( isset( $_POST[ 'submit' ] ) )
{
	$to   = "gunelbehremova@yahoo.com"; // this is your Email address
	$from = $_POST[ 'email' ];          // this is the sender's Email address
	$name = $_POST[ 'name' ];

	$message = $_POST[ 'message' ];

	$headers = "From:" . $from;

	mail( $to, $message, $headers );

	echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";

}
?>

<!DOCTYPE html>
<head>
	<title>Form submission</title>
</head>
<body>

	<form action="" method="post">
		Name:
		<input type="text" name="name">
		<br>
		Email:
		<input type="text" name="email">
		<br>
		Message:
		<br>
		<textarea rows="5" name="message" cols="30"></textarea>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body></html>