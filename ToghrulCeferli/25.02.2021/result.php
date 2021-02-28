$db = new PDO("mysql:host=localhost;dbname=fscode_intern","root","", array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));

$sql = "SELECT * FROM `file_upload`";
$uploads = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach($uploads as $i => $upload) {
    $row = $i+1;
    echo "<p>$row) ".$upload['image_url']."</p>;
}
