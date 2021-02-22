<?php
/*  Ekranda yazı yazmaq üçün input və submit etmək üçün button olacaq. Submit edəndə bizə göndərilən yazının email olub-olmadığını deyəcək. Real email-ləri tapmağı lazım deyil, funksiya email-in yazılış formasına əsasən cavab versə bəsdir.  */

function mailType ( $mail )
{
	if ( isset( $_POST[ 'submit' ] ) )
	{
		if ( filter_var( $_POST[ 'yoxla' ], FILTER_VALIDATE_EMAIL ) )
		{
			echo $_POST[ 'yoxla' ] . " -> Bu mail duzgun formatdadır";
		}
		else
		{
			echo $_POST[ 'yoxla' ] . " -> Email formatınız uğurlu secilməyib";
		}
	}
}

mailType( $mail );
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Mail yoxla</title>
	</head>
	<body>
		<form method="POST" action="">
			<input type="text" name="yoxla">
			<button type="submit" name="submit">Gonder</button>


		</form>

	</body>
</html>