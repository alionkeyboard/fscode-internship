<?php
if(isset($_POST['pattern'],$_POST['string']))
{
    function myRegexEditor($pattern,$subject,$result = null)
    {
        preg_match_all($pattern,$subject,$result);

        $output = '';
        $i = 1;
        $position = 0;
        foreach(mb_str_split($subject) as $letter)
        {
            if(in_array($letter,$result[0]))
            {
                $title = 'Match '.$i.'<hr/> group 0: '.$letter.'<hr/> pos: '.$position.'-'.($position+1);
                if($i%2 == 0)
                {
                    $output .= '<a class="tip" style="background-color:#084B8C;">'.$letter.'<span>'.$title.'</span></a>';
                }
                else
                {
                    $output .= '<a class="tip" style="background-color:#05335D;">'.$letter.'<span>'.$title.'</span></a>';
                }
                $i++;
            }
            else
            {
                $output .= $letter;
            }
            $position++;
        }
        return $output;
    }


    $pattern = $_POST['pattern'];

    $subject = $_POST['string'];

    echo myRegexEditor($pattern,$subject);
}
else
{
    header('location:index.php');
}
?>
