<?php

/**
 * 2) Ekranda 10x10 olmaqla 100 ədəd button olacaq, buttonların hamısı eyni cür görünəcək.
 * Lakin, 20-sində mina olacaq, 80-ində isə yox.
 * İstifadəçi düymələrə sıra ilə basacaq.
 * Mina olan düyməyə basdıqda ekrana “Minaya düşdünüz” mesajı çıxmalıdır.
 * Minalar təsadüfi paylanmalıdır.
 * Js, Php, HTML, CSS işlədə bilərsiniz.
*/

    $xanaSayi = 100;
    $bombaSayi = 20;
    $boshXana = $xanaSayi-$bombaSayi;

    $bombArr = array_fill(1, $bombaSayi, 'mina');  //0-20 arası => 'mina' yazılacaq
    $boshXanaArr = array_fill($bombaSayi, $boshXana, 'boshxana');   //20-100 arası => 'mina' yazılacaq

    $xana = array_merge($bombArr, $boshXanaArr);
    shuffle($xana); //shuffle $xana massivinin value'larının yerlərini random dəyişir

    //$n = array_count_values($xana);   //20 mina, 80 boshxana olduğunu görmək üçün
    //print_r ($n);

    if($_GET['id']){
        $id = $_GET['id'];
        
        if($xana[$id-1] == 'mina'){
        
            echo "<script>
                    if (confirm('Minaya düşdünüz. Oyuna yenidən başlamaq istəyirsinizmi?')) {
                        location.href = '2.php';
                      } else {
                        alert('Oyun bitdi!');
                      }
                </script>";
        }
        
        else{
            echo "<script>
                    location.href = '2.php';
                </script>";
        }
    }

?>