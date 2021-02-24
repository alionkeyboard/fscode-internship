<?php
if(isset($_POST['id']))
{
    include 'include/config.php';
    $id=htmlspecialchars(trim($_POST["id"]));
	$query=$conn->prepare("SELECT * FROM images WHERE id=?");
	$query->execute([$id]);
	$rows=$query->fetchall(PDO::FETCH_ASSOC);
	$count=count($rows);
	if($count!=0)
	{		
        if(file_exists("assets/uploads/".$rows[0]['image_url']))
        {
            unlink("assets/uploads/".$rows[0]['image_url']);
        }

        $remove=$conn->prepare("DELETE FROM `images` WHERE id=?");
        $remove->execute([$id]);
        
        echo 'done';
	}
	else
	{
		echo 'notFound';
	}
}
else
{
    header('location:index.php');
}