<?php

$sql = 'SELECT * FROM images ORDER BY upload_time DESC';
$stmt = $db->query($sql);
if ($stmt->num_rows > 0) {

    while ($row = $stmt->fetch_assoc()) {
        $imageURL = 'images/' . $row["image_name"];
?>
        <div id="imagecontainer">
            <img src="<?php echo $imageURL ?>" alt="" >
            <p><?php echo $imageURL ?></p>
        </div>
<?php
    }
} else {
    echo '<p>Nothing to show</p>';
}

?>