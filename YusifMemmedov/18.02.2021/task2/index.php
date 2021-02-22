<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</head>
	<body>
		<div class='container'>
			<div class='row'>
				<div class='col-12'>
					<div id='info' class='alert alert-success my-3 mx-auto' style='width:600px'>
						Hava məlumatı yüklənir...
					</div>
				</div>

				<div id='table' class='col-12' style="display: none">
					<div class='d-flex justify-content-center border mx-auto bg-light p-3' style='width:600px'>
						<table class='table'>
							<tr>
								<td>Aşağı temperatur</td>
								<td class='melumat'></td>
							</tr>
							<tr>
								<td>Yuxarı temperatur</td>
								<td class='melumat'></td>
							</tr>
							<tr>
								<td>Hiss olunan</td>
								<td class='melumat'></td>
							</tr>
							<tr>
								<td>Nisbi rütubət</td>
								<td class='melumat'></td>
							</tr>
							<tr>
								<td>Külək</td>
								<td class='melumat'></td>
							</tr>
							<tr>
								<td>Günəş çıxır</td>
								<td class='melumat'></td>
							</tr>
							<tr>
								<td>Günəş batır</td>
								<td class='melumat'></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

		<script>

            $(document).ready(function () {
                $.post('task.php', function (melumat) {
                    try {
                        alert(JSON.stringify(melumat));
                        var hava_melumati = JSON.parse(melumat);
                        $('.melumat').each(function (index) {
                            $(this).html(hava_melumati[index]);
                        });
                        $('#table').css('display', 'block');
                        $('#info').html('DONE!');
                    } catch (error) {
                        $('#info').removeClass('alert-success');
                        $('#info').addClass('alert-danger');
                        $('#info').html('Something went wrong');
                    }
                });
            });

		</script>
	</body>
</html>