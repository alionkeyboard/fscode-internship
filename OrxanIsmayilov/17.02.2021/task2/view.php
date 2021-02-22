<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<style>
            .form {
                display: flex;
                padding: 160px;
                margin: auto;
            }

            .form .row {
                justify-content: center;
                align-items: center;
            }

            .form .row .col-md-8 {
                background: white;
                padding: 100px;
                align-items: center;
                border: 2px solid grey;

            }
		</style>
	</head>
	<body style="background:blue;">

		<div class="form">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<p>
							<?php if ( isset( $_GET[ 'floor' ] ) )
							{
								echo( "Asagi yuvarlaqlasdirilmis eded: " . $_GET[ 'floor' ] . '(' . $_GET[ 'remain' ] . ')<br>' );
								echo( "Yuxari yuvarlaqlasdirilmis eded: " . $_GET[ 'ceil' ] . '(' . $_GET[ 'remainCeil' ] . ')' );
							}
							?>
						</p>
						<form method="get" action='controller.php'>
							<div class="form-group text-center">
								<input type="text" class="form-control" name="number" id="" placeholder="Ededi daxil edin">
							</div>
							<button type="submit" class="btn btn-primary">Enter</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>