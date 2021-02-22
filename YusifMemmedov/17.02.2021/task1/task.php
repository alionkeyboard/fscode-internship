<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//bu funksiya duz variantla secilmish varianti qarshilashdirib secimin duzgunluyunu yoxlayir
function check_answer($choices){
    
    foreach ($choices as $choice){
        
        if($choice['is_correct_answer'] && $choice['checked']){
            return 'correct';
        }
        
    }

    return 'wrong';
}

//variantlari yaradi ve variantlara tesadufi rengler qoyur
//hemcinin duzgwn varianti ishareleyir
function generate_choices(){
   
   $choices = [];
   $rgb = 'rgb(';
   
   while(count($choices)!==4){
       $rgb = 'rgb(' . (string) rand(0, 255) . ', ' . (string) rand(0, 255)  . ', ' . (string) rand(0, 255) . ')';
       
       $suggested_option = array('color' => $rgb, 'is_correct_answer' => false, 'checked' => false);
       
       $option_exsists = false;
       
       //random yolla tekrar variant yaranibsa bir de variant yaradiriq
       foreach ($choices as $option){
           $option_exsists = $option === $suggested_option;
           
           if($option_exsists){
               break;
           }
       }
       
       if(!$option_exsists){
           $choices[] = $suggested_option;
       }
   }
   
   $choices[rand(0, 3)]['is_correct_answer'] = true;
       
   /*
    * [
    * 'color' => 'rgb(123, 34, 234)'
    * 'is_correct_answer' => true|false
    * 'checked' => true|false
    * ]
    */
   return $choices;
}




//yuxaridaki metodlari ishlederek
//post metdou emal edir
//eger metod get olsa teze sual yaradir
//metod post olsa verilmis suali yoxlayir
//ve her iki halda sualin isarelenmis, dogru cavablanmis? ya cavablanmamis olmasi barede melumati
//hemcinin sualin oz melumatlarini serialize edib arraya yazir
function HttpResponse(){
    
    $choices = [];
    $answered_correctly = 'not_answered';
    
    if(isset($_POST['colorIndex'])){
        $choices = unserialize($_SESSION['question'])['choices'];
        $choices[$_POST['colorIndex']]['checked'] = true;
        $answered_correctly = check_answer($choices);
        
    }else{
        $choices = generate_choices();
        unset($_SESSION['question']);
    }
    
    //bunu eslinde generate_choices() funksiyasindan return etmeliydim
    //daha butun kodu deyishmemek ucun burda edirem
    //random yolla hansi rengi sual olaraq
    //hansi varianti ise duz olaraq secdiyimi bilmek ucun
    $color_to_ask = [];
    $i = 0;
    foreach ($choices as $choice){
        if($choice['is_correct_answer']===true){
            $color_to_ask['color'] = $choice['color'];
            $color_to_ask['index'] = $i;
            break;
        }
        $i++;
    }
    
    $question = [
        'choices' => $choices,
        'answered_correctly' => $answered_correctly,
        'color_to_ask' => $color_to_ask
    ];
    
    $_SESSION['question'] = serialize($question);
    header('Location: index.php');
}

HttpResponse();
?>