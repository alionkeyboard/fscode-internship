<?php
include '../config/dbconnect.php';

//get all users order by ascending id
$sql = 'SELECT * FROM users ORDER BY id ASC';
$stmt = $db->query($sql);
if ($stmt->num_rows > 0) {
    //fetching each row
    while ($row = $stmt->fetch_assoc()) {
        $id = $row['id'];
        $first_name = $row["first_name"];
        $last_name = $row['last_name'];
        $token = $row['token'];
?>
        <!-- creating option each time, select in users.php-->
        <option value='<?php echo $id; ?>,<?php echo $token; ?>'>
            <p>ID: <?php echo $id ?></p>
            <p><?php echo $first_name ?></p>
            <p><?php echo $last_name ?></p>
        </option>
<?php
    }
    $db->close();
} else {
    echo '<option value="" disabled>Nothing to show</option>';
}
?>