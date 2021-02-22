<?php
include 'simple_html_dom.php';

$url=$_GET['url'];

$connect=str_get_html(file_get_contents($url));
$data_1=$connect->find("meta[property='og:image']",0)->content;
$json=file_get_contents($url."?__a=1");
$data=json_decode($json,true); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<img src="<?php echo $data_1; ?>" alt="" >
<p><?php echo "posts - ".$data['graphql']['user']['edge_owner_to_timeline_media']['count'];?></p>
<p><?php echo "followers - ".$data['graphql']['user']['edge_followed_by']['count'];?></p>
<p><?php echo "following - ".$data['graphql']['user']['edge_follow']['count'];?></p>
<p><?php echo "BIO - ".$data['graphql']['user']['biography']; ?></p>

</body>
</html>
