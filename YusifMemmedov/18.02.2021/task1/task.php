<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//bu funskiya verilmish insta url-i oxuyub
//neticede istifadechinin melumatini qaytarir
function insta_parse($url){
    
    //bu hissede instanin ingilis dilinde olan url-in elde edirik
    list($url, ) = explode('?', $url);
    $url = trim($url, ' ');
    $url = trim($url, '/');
    $url .='/?hl=en-gb';
    
    //verilmish url-i oxuyuruq
    $a = file_get_contents($url);
    
    //profile image-in elde olunmasi
    $pattern = "/<meta property=\"og:image\" content=\"(.*?)\" \/>/";
    $profile_image = (preg_match($pattern, $a, $matches)===1)? $matches[1] : 'none';
    
    //bionun oxunmasi
    $pattern ="/biography\":\"(.*?)\",\"blocked/";
    $bio = 'bio: ';
    $bio .= (preg_match($pattern, $a, $matches)===1)? $matches[1] : 'none';
    $bio = json_decode('"'.$bio.'"');
    
    //profile name and username oxunmasi
    $pattern = "/<meta property=\"og:description\" content=\"(.*?)\" \/>/";
    $content = (preg_match($pattern, $a, $matches)===1)? $matches[1] : 'none';
    $name = $full_name = $user_name = '';
    $stats = $followers = $following = $post_count = '';
    
    
    //melumatlarin emali
    if($content !== 'none'){
        
        //izleyici ve post sayinin emali
        list($stats, $name)  = explode(' - ', $content);
        list($followers, $following, $post_count) = explode(', ', $stats);
        list( , $name) = explode('from', $name);
        
        //axirinci boshlogda ayirmaq ucun reverse eledim
        $name = strrev($name);
        list($user_name, $full_name) = explode(' ', $name, 2);
        $full_name = strrev($full_name);
        
        $user_name = strrev($user_name);
        
        //usernname moterizelerin ichinde oldughu ucun trim
        $user_name = trim($user_name, '(');
        $user_name = trim($user_name, ')');
    }
    
    
    //javascriptle ishleyende murekkeblik olmasin deye iki array yaradib onlari birge json kimi qaytariram
    $info = array(
        $user_name,
        $full_name,
        $post_count,
        $followers,
        $following,
        $bio
    );
    
    $insta_user = array(
        'info' => $info,
        'profile_image' => $profile_image
    );
    
    return json_encode($insta_user);
}

//requeste verilen response
if(isset($_REQUEST['url'])) echo insta_parse($_REQUEST['url']);

?>