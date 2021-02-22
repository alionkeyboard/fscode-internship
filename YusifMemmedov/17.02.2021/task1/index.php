<?php

session_start();
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

		<style type="text/css">
            label {
                border: 1px solid beige;
                padding: 10px;
                border-radius: 10px;
                box-sizing: border-box;
                width: 100%;
                background-color: rgb(100, 150, 200);
            }

            #danger, #success {
                display: none;
            }
		</style>
	</head>
	<body>

		<div class="container">
			<div class='row pt-3'>
				<div id='sual' class='col-12'>
					<div id='primary' class="alert alert-primary">
						<b id='color'></b>
						koduna uyghun rengi secin. (ipucu :
						<b id='hint'></b>
						)
					</div>
				</div>
				<div class='col-12'>
					<div id='danger' class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Wrong answer!</strong>
						You failed to answer this question correctly.
					</div>
					<div id='success' class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Correct answer!</strong>
						You answered correctly.
					</div>
				</div>
				<div class='col-12'>
					<form method='POST' action='task.php'>
						<div class="form-group">
							<label for='color1'>
								<input id='color1' type='radio' name='colorIndex'>
							</label>

							<label for='color2'>
								<input id='color2' type='radio' name='colorIndex'>
							</label>

							<label for='color3'>
								<input id='color3' type='radio' name='colorIndex'>
							</label>

							<label for='color4'>
								<input id='color4' type='radio' name='colorIndex'>
							</label>
						</div>
						<a href='task.php' class='btn btn-success'>Yenile</a>
						<input id='answer' class='btn btn-primary' type='submit' value='Yoxla'>
					</form>
				</div>
			</div>
		</div>

		<script>

            function create_page(sual) {
                $('#color').html(sual.color_to_ask.color);
                $('#hint').html(sual.color_to_ask.index);
                $('label').each(function (index) {
                    $(this).css('background-color', sual.choices[index].color);

                });
                $(':radio').each(function (index) {
                    $(this).attr('checked', sual.choices[index].checked);
                    $(this).attr('value', index);
                });

                $('#answer').prop('disabled', sual.answered_correctly !== 'not_answered');

                if (sual.answered_correctly === 'correct') {
                    $('#success').css('display', 'block');
                }
                if (sual.answered_correctly === 'wrong') {
                    $('#danger').css('display', 'block');
                }
            }

            $('document').ready(function () {
                var sual = <?php echo json_encode( unserialize( $_SESSION[ 'question' ] ) ) ?> ;
                create_page(sual);
            });


		</script>
	</body>
</html>
