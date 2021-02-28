<?php
include 'includes/config.php';
$query=$conn->prepare("SELECT * FROM images");
$query->execute();
$rows=$query->fetchall(PDO::FETCH_ASSOC);
$count=count($rows);

$output = '';
if($count !=0)
{
    $output .='
        <div class="show-image">
            <a href="uploads/'.$rows[0]['image_url'].'" target="_blank">
                <img class="imageList" src="uploads/'.$rows[0]['image_url'].'" id="'.$rows[0]['id'].'" alt="'.$rows[0]['image_url'].'">
            </a>
            <div class="switcher">
                <span class="right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                <span class="left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                <span class="center">1/'.$count.'</span>
            </div>
        </div>
    ';
}
else
{
    $output .=' 
    <ul class="list-group">
        <li class="list-group-item">Hələ də heç bir şəkil əlavə edilməyib</li>
    </ul>
    
    ';
}

echo $output;
?>
