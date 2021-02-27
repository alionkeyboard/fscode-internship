<?php
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
        <tr>
            <td><?php if (!empty($id)) {
                    echo $id;
                } ?></td>
            <td><?php if (!empty($first_name)) {
                    echo $first_name;
                } ?></td>
            <td><?php if (!empty($last_name)) {
                    echo $last_name;
                } ?></td>
        </tr>
<?php
    }
    $db->close();
} else {
    echo '<p>Nothing to show</p>';
} ?>