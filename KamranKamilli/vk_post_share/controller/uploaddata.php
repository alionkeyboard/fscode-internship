<?php
include './config/dbconnect.php';
include './config/config.php'; 

if($_SERVER['REQUEST_METHOD' ] === 'POST')
{
    //get url from form input
    $url = $_POST['token'];
    //match user id and token in url
    $patternUserId = "/user_id=([0-9]{9})/i";
    $patternToken = '/\s*access_token=(.*?)&/i';
    preg_match_all($patternUserId, $url, $user_id);
    preg_match_all($patternToken,$url, $token);
    
    //get json user data
    $userInfo = "https://api.vk.com/method/users.get?user_id=".$user_id[1][0]."&access_token=".$token[1][0]."&v=5.52";
    $json=file_get_contents($userInfo);
    $user_data = json_decode($json, true);

    $id = $user_data['response'][0]['id'];
    $firs_name = $user_data['response'][0]['first_name'];
    $last_name = $user_data['response'][0]['last_name'];

    //insert it in database
    $sql_1 = "INSERT INTO users(id,first_name,last_name,token) VALUES (?,?,?,?)";

    $sql_2 = "SELECT * FROM users WHERE id=$id";
    $stmt = $db->query($sql_2);
    //if user is already in database reject it
    if ($stmt->num_rows > 0) {
        echo "<p class='error'>This user is already exists!</p>";
    }
    else{
            if($stmt = $db->prepare($sql_1)){
            // bind parameter used to prevent SQL injection
            $stmt->bind_param("isss",$pid,$pfirst_name,$plast_name,$ptoken);
            $pid = $id;
            $pfirst_name = $firs_name;
            $plast_name =$last_name;
            $ptoken = $token[1][0];

            if($stmt->execute()){

                header('location: ./pages/users.php');
                exit();
            }
            else{

                echo "<p class='error'>Something went wrong</p>";
            }

            $stmt->close();
        }
    }
        $db->close(); 
}
?>