<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

$img_db = new ImageDB();

$images = $img_db->fetch_images();
?>

<html>
<head>

</head>

<body>

	<form action='task.php' method='post' enctype="multipart/form-data">
		<input type="file" name='file'>
		<input type="submit" name='submit'>
	</form>
	
	<table>
	<thead>
		<tr> <th>id</th> <th>image link</th> <th>upload date</th> </tr>
	</thead>
	
	<tbody>
	<?php 
    	foreach ($images as $image){
    	    echo "<tr> <td>{$image['id']}</td> <td><a href='{$image['image_url']}'>{$image['image_url']}</a></td> <td>{$image['upload_date']}</td> </tr>";
    	}
	?>
		
	</body>
	
	</table>

</body>

</html>