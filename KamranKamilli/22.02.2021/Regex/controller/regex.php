<?php
$error = "";
$matches = [];
$flag = "";
if(isset($_POST['submit']))
{
    if(!empty($_POST['check_list'])) {
        foreach($_POST['check_list'] as $check) {
                $flag = $flag.$check;
        }
    }
    
    if(empty($_POST['textarea']) || empty($_POST['pattern']) || empty($_POST['delimiters']))
    {
        $error = 'Pattern, text, delimiter cant be empty';
    }
    else
    {
        $delimiters = $_POST['delimiters'];
        $textarea = $_POST['textarea'];
        $pattern = $delimiters.$_POST['pattern'].$delimiters.$flag;
    }
    preg_match_all($pattern, $textarea, $matches);

}
?>