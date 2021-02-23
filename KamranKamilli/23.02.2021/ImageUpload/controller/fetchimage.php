<?php

//select all data from table order by upload time in descending order
$sql = 'SELECT * FROM images ORDER BY upload_time DESC';
$stmt = $db->query($sql);
if ($stmt->num_rows > 0) {
    //if data exist in database the fetch each row
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