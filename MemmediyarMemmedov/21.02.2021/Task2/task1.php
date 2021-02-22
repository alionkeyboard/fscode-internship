<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<form action="#" method="post">
			<input type="text" name="email">
			<button name="enter">OK</button>
		</form>
		<?php
		$test = $_POST[ 'email' ];
		if ( isset( $_POST[ 'enter' ] ) && filter_var( $test, FILTER_VALIDATE_EMAIL ) )
		{
			echo "$test => bu bir emaildir";
		}
		else
		{
			echo "$test => bu bir email deyl";
		}

		?>
	</body>
</html>