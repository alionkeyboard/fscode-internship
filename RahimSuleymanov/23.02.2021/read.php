<?php
include 'include/config.php';

$query=$conn->prepare("SELECT * FROM images ORDER BY id DESC");
$query->execute();
$rows=$query->fetchall(PDO::FETCH_ASSOC);
$count=count($rows);

$output = '';
if($count !=0)
{
    foreach($rows as $row)
    {
        $output .='
            <div class="show-image" style="border:1px solid black">
                <a href="assets/uploads/'.$row['image_url'].'" target="_blank">
                    <img class="imageList" src="assets/uploads/'.$row['image_url'].'" alt="'.$row['image_url'].'">
                </a>
                <input class="delete" data-id="'.$row['id'].'" type="button" value="Delete" />
            </div>
        ';
    
    }
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
