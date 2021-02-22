<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container" style="margin-top: 50px">
			<div>
				<?php

				if ( isset( $response ) )
				{
					if ( $response == 'success' )
					{
						echo '<span class="badge badge-success">Dogru</span>';
					}
					else
					{
						echo '<span class="badge badge-danger">Yanlish</span>';
					}
				}

				?>
				<p><?php echo $question ?> Kodunun reng qarshiligini tapin</p>
			</div>
			<div class="row">

				<form class="form-inline" method="POST" action="include.php">
					<input type="hidden" name="hidden" value="<?php echo $question ?>">
					<div class="form-group mx-sm-3 mb-2">
						<label for="inputPassword2" class="sr-only">Insert number</label>
						<input type="radio" name="number" id="inputPassword2" value="<?php echo $variant1 ?>">
						<div style="margin-left:20px; background-color: rgb(<?php echo $variant1 ?>); width: 50px; height: 50px; border-radius: 25px;"></div>
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="inputPassword2" class="sr-only">Insert number</label>
						<input type="radio" name="number" id="inputPassword2" value="<?php echo $variant2 ?>">
						<div style="margin-left:20px; background-color: rgb(<?php echo $variant2 ?>); width: 50px; height: 50px; border-radius: 25px;"></div>
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="inputPassword2" class="sr-only">Insert number</label>
						<input type="radio" name="number" id="inputPassword2" value="<?php echo $variant3 ?>">
						<div style="margin-left:20px; background-color: rgb(<?php echo $variant3 ?>); width: 50px; height: 50px; border-radius: 25px;"></div>
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="inputPassword2" class="sr-only">Insert number</label>
						<input type="radio" name="number" id="inputPassword2" value="<?php echo $variant4 ?>">
						<div style="margin-left:20px; background-color: rgb(<?php echo $variant4 ?>); width: 50px; height: 50px; border-radius: 25px;"></div>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Send</button>
				</form>
			</div>
		</div>


	</body>
</html>