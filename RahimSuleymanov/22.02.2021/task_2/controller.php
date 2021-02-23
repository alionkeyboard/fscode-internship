<?php
if(isset($_POST['number'],$_POST['text']))
{
    // bu funksiya massivde menfi ve musbet istiqametdi periodik olaraq,n element sonraki(evvelki)  elementi tapmaga komek edir
    function myPosition($position,$count)
    {
        if($position<0)
        {
            if($count+$position%$count == $count)
            {
                $position = 0;
            }
            else
            {
                $position = $count+$position%$count;
            }
        }
        elseif($position>31)
        {
            $position = $position%$count;
        }
        return $position;
    }

    function myEncrypt($distination = 1,$string)
    {
        $abc = ['a','b','c','ç','d','e','ə','f','g','ğ','h','x','ı','i','j','k','q','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z'];
        $specialCaracters = [' ','.',',','!','-','`','~','@','#','$','%','^',':',';','\'','"','1','2','3','4','5','6','7','8','9','0','(',')','{','}','[',']'];
        $output = '';
        $lowercase = true;//eger $lowercase = true ise onda cari herfi kicik versiyada convert edecek
        foreach(mb_str_split($string) as $letter)
        {
            // İ,I herfleri mb_strtolower funksiyasi i,ı cevirsede onlarin unicode qarsiligi ile eyni deyil
            if($letter === 'İ')
            {
                $letter = 'i';
                $lowercase = false;
            }
            elseif($letter === 'I')
            {
                $letter = 'ı';
                $lowercase = false;
            }
            elseif(in_array($letter,$specialCaracters))
            {
                $lowercase = 'special';
            }
            else
            {
                if(mb_strtolower($letter) === $letter)
                {
                    $lowercase = true;
                }
                else
                {
                    $lowercase = false;
                }
            }

            
            

            if($lowercase === true)
            {
                $position = myPosition(array_search(mb_strtolower($letter),$abc)+$distination,count($abc));
                $output .= $abc[$position];
            }
            else
            {
                if($lowercase == 'special')
                {
                    $output .= $letter;
                }
                else
                {
                    $position = myPosition(array_search(mb_strtolower($letter),$abc)+$distination,count($abc));
                    if($abc[$position] === 'i')
                    {
                        $output .= 'İ';
                    }
                    elseif($abc[$position] === 'ı')
                    {
                        $output .= 'I';
                    }
                    else
                    {
                        $output .= mb_strtoupper($abc[$position]);
                    }   
                }
            }
        }
        return $output;
    }

    $distination=$_POST['number'];
    $string = $_POST['text'];
    echo myEncrypt($distination,$string);
}
else
{
    header('location:index.php');
}