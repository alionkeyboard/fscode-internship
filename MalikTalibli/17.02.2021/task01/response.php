<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<table class="table">
  <thead>
    <tr>
      <th scope="col">İstifadəçinin daxil etdiyi ədəd = x</th>
      <th scope="col">Natural ədəd < x</th>
      <th scope="col">Natural ədəd > x</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      	<td><?php echo $number ?></td>
	 	<td><?php echo $tam."( $boyuk)" ?></td>
	 	<td><?php echo ++$tam."( $kicik)" ?></td>
    </tr>
  </tbody>
</table>

</body>
</html>