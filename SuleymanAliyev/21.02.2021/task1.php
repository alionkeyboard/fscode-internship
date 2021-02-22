<?php
/*Ekranda ad, email və mesaj yazmaq üçün form olacaq. Form-u submit edəndə həmin email-ə form-dakı adı və mesajı göndərəcək.
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer( TRUE );

$alert = '';

if ( isset( $_POST[ 'submit' ] ) )
{
	$ad    = $_POST[ 'first_name' ];
	$email = $_POST[ 'email' ];
	$mesaj = $_POST[ 'message' ];

	try
	{

		$mail->isSMTP();
		$mail->Host       = 'smtp.gmail.com';
		$mail->SMTPAuth   = TRUE;
		$mail->Username   = 'mraliyev735@gmail.com';
		$mail->Password   = '337433ss';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port       = '587';

		$mail->setFrom( 'mraliyev735@gmail.com' );
		$mail->addAddress( 'mraliyev735@gmail.com' );
		$mail->isHTML( TRUE );
		$mail->Subject = 'Subject';
		$mail->Body    = "<h3> Name : $ad <br> Email: $email <br>Message : $mesaj </h3>";

		$mail->send();
		$alert = "Message goog";
	}
	catch ( Exception $e )
	{
		$alert = '<span>' . $e->getMessage() . '</span>';
	}
}
?>


<!DOCTYPE html>
<head>
	<title>Form submission</title>
</head>
<body>
	<div><h3><?php $alert ?></h3></div>

	<form action="" method="post">
		First Name:
		<input type="text" name="first_name">
		<br>
		<!--Last Name: <input type="text" name="last_name"><br>-->Email:
		<input type="text" name="email">
		<br>
		Message:
		<br>
		<textarea rows="5" name="message" cols="30"></textarea>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>

<script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);

    }
</script>