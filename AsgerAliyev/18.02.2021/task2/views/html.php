<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="views/style.css">
		<title>Hava</title>
	</head>
	<body>
		<?php if ( ! isset( $gunorta_kulek ) ): ?>
			<div class="alert alert-danger">
				Please insert correct site!
			</div>
		<?php else: ?>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 col-md-4 col-sm-12 col-xs-12">
						<div class="card p-4">
							<div class="d-flex">
								<h5 class="flex-grow-1">Bakı</h5>
								<h6>
									<li>Gün çıxır: <?php echo $gun_cixir ?></li>
									<li>Gün batır: <?php echo $qurub ?></li>
								</h6>
							</div>
							<div class="d-flex flex-column temp mt-5 mb-3">
								<h1 class="mb-0 font-weight-bold" id="heading">Ən yüksək tempratur: <?php echo $en_isti_hava ?></h1>
								<span class="small grey">Ən aşağı tempratur: <?php echo $en_soyuq_hava ?></span>
							</div>
							<div class="d-flex">
								<div class="temp-details flex-grow-1">
									<p class="my-1">
										<img src="https://i.imgur.com/B9kqOzp.png" height="17px">
										<span><?php echo $gunorta_kulek ?></span>
									</p>
									<p class="my-1">
										<img src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-blue-water-drop-png-image_5054026.jpg" height="17px">
										<span><?php echo $gunorta_nem ?></span>
									</p>
									<p class="my-1">
										<img src="https://i.imgur.com/wGSJ8C5.png" height="17px">
										<span><?php echo $gunorta_hiss_istilik ?></span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</body>
</html>