<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>


		<form method="post" action="<?php echo htmlspecialchars( $_SERVER[ 'PHP_SELF' ] ); ?>">
			<div class="style1">
				<h2>
					<center>Find number</center>
				</h2>
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<input type="text" name="number" required>
						</div>
						<div class="col-md-4">
							<input type="submit" value="Find" name="find">
						</div>
					</div>
				</div>
			</div>
		</form>

		<?php
		include "findValue.php";
		?>

	</body>
</html>