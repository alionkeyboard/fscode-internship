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
            .section {
                display: flex;
                margin-top: 100px;
            }

            .row {
                justify-content: center;
                align-items: center;
            }

            .col-md-12 {
                background: white;
            }

            tr > td, th {
                padding: 20px 10px 20px 10px;
            }

		</style>
	</head>
	<body>

		<?php include( 'controller.php' ); ?>
		<div class="section ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<table class="table-bordered table-striped ">
							<thead class="cf" bgcolor="#F0F0FF">
								<tr>
									<?php foreach ( $today as $k => $v ) { ?>
										<th class="text-center"><?php echo $k; ?></th>
									<?php } ?>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php foreach ( $today as $k => $v ) { ?>
										<td data-title="Tarix" class="text-center"><?php echo $v ?></td>
									<?php } ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<script>
            $(function () {
                $('#money, #valute').change(function (e) {
                    e.preventDefault();
                    var money = $('#money').val();
                    var valute = $('#valute').val();

                    $.ajax({
                        type: 'get',
                        url: 'controller.php',
                        data: { 'money': money, 'valute': valute },
                        success: function (data) {
                            $('.alert').css('display', 'block').html(data).fadeOut(3000);
                        }
                    });

                });

            });
		</script>


	</body>
</html>