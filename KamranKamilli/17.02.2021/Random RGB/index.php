<?php

include './controller/randomRGB.php';
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<title>Guess Color</title>
		<style>
            :root {
                --red1: <?= $assignToButton_1[0] ?>;
                --green1: <?= $assignToButton_1[1] ?>;
                --blue1: <?= $assignToButton_1[2] ?>;
                --red2: <?= $assignToButton_2[0] ?>;
                --green2: <?= $assignToButton_2[1] ?>;
                --blue2: <?= $assignToButton_2[2] ?>;
                --red3: <?= $assignToButton_3[0] ?>;
                --green3: <?= $assignToButton_3[1] ?>;
                --blue3: <?= $assignToButton_3[2] ?>;
                --red4: <?= $assignToButton_4[0] ?>;
                --green4: <?= $assignToButton_4[1] ?>;
                --blue4: <?= $assignToButton_4[2] ?>;
            }
		</style>
	</head>

	<body>
		<div class="maincontainer">
			<header>
				<div id="header">
					<h1 id="heading">Guess Color</h1>
				</div>
			</header>
			<section>
				<div id=section>
					<?php echo "<p id='rgb'>RGB(" . $pickedRandomRGB[ 0 ] . ", " . $pickedRandomRGB[ 1 ] . ", " . $pickedRandomRGB[ 2 ] . ")</p>" ?>
					<form method="POST">
						<button type="submit" class="button" id="button1" name="button1"></button>
						<button type="submit" class="button" id="button2" name="button2"></button>
						<button type="submit" class="button" id="button3" name="button3"></button>
						<button type="submit" class="button" id="button4" name="button4"></button>
						<br>
						<span class="help-block"><?php echo $result; ?></span>
					</form>
				</div>
			</section>
		</div>
	</body>

</html>