<?php

session_start();
ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</head>
	<body>

		<div class="container">
			<div class='row pt-3'>
				<div class='col-12'>
					<form action='task.php'>
						<div class="form-group">
							<label for='number'>
								Ededi daxil edin:
							</label>
							</br>
							<input id='number' type='number' step='any' name='number'>
						</div>
						<input class='btn btn-primary' type='submit' value='Tap'>
					</form>
				</div>
				<div class='col-12'>
					<table>
						<tbody>
							<tr>
								<th>verilen</th>
								<th>yuxari tam</th>
								<th>yuxari tam</th>
							</tr>
							<tr>
								<td id='num'></td>
								<td id='num_asagi'></td>
								<td id='num_yuxari'></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>


		<script>

            function create_page(netice) {
                $('#number').val(netice.num);
                $('#num').html(netice.num);
                $('#num_asagi').html(netice.num_asagi);
                $('#num_yuxari').html(netice.num_yuxari);
            }

            $('document').ready(function () {
                var netice = <?php echo isset( $_SESSION[ 'netice' ] ) ? json_encode( unserialize( $_SESSION[ 'netice' ] ) ) : '"nope"' ?> ;
                if (netice !== 'nope') create_page(netice);
                else $('table').html('');

            });
		</script>
	</body>
</html>
