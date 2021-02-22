<?php
function getWeather($city){

    if($city != ""){
        $url = "https://www.havaproqnozu.com/$city-15-gunluk-hava-veziyyeti-taxmini.html";

                if ($curl = curl_init()) {
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 30000,
                        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36",
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            // Set here requred headers
                            "accept: /",
                            "accept-language: en-US,en;q=0.8",
                        ),
                    ));
                    $content = curl_exec($curl);
                    $html = str_replace(array("\n","\t","\t", "  "),'',$content);

                    $str = '<tr><td align="left" data-title="Tarix" class="text-nowrap">(.*?)<\/td>';
                    preg_match_all('/'.$str.'/', $html, $all);

                    if (count($all[0])==0){
                        return ['error'=>'City is not found'];
                    }

                    $tarix=$all[1][0]; 
                    
                    $str = '<td data-title="TƏSVİR"><img src="(.*?)"';
                    preg_match_all('/'.$str.'/', $html, $all);
                    $image=$all[1][0];
                    $tesvir ="<img src='https://www.havaproqnozu.com/$image'>";

                    $str = '<td align="center" data-title="Alçaq"><span class="minDerece">(.*?)<\/span>';
                    preg_match_all('/'.$str.'/', $html, $all);
                    $alcaq=$all[1][0]; 
                
                    $str = '<td align="center" data-title="Yüksək"><span class="maksDerece">(.*?)<\/span>';
                    preg_match_all('/'.$str.'/', $html, $all);
                    $yuksek=$all[1][0]; 
                    
                    $str = '<td align="center" data-title="Hiss edilir"><span class="hisDerece">(.*?)<\/span>';
                    preg_match_all('/'.$str.'/', $html, $all);
                    $hissedilir=$all[1][0]; 
                    
                    $str = '<td align="center" data-title="Rütubət"><span class="nemDerece">(.*?)<\/span>';
                    preg_match_all('/'.$str.'/', $html, $all);
                    $rutubet=$all[1][0]; 
                    
                    $str = '<td align="center" data-title="Külək">(.*?)<\/td>';
                    preg_match_all('/'.$str.'/', $html, $all);
                    $kulek=$all[1][0]; 
                
                
                    $str = '<td align="center" data-title="Günün çıxması">(.*?)<\/td>';
                    preg_match_all('/'.$str.'/', $html, $all);
                    $gun=$all[1][0]; 
                    
                    $str = '<td align="center" data-title="Qürub">(.*?)<\/td>';
                    preg_match_all('/'.$str.'/', $html, $all);
                    $qurub=$all[1][0]; 
                
                    
                    $weather=['Tarix'=>$tarix,'Hava Vəziyyəti'=>$tesvir,'Ən aşağı (Gecə)'=>$alcaq,'Ən Yuxarı (Gündüz)'=>$yuksek,'Hiss istilik'=>$hissedilir,'Nəm oranı'=>$rutubet,'Külək'=>$kulek,'Günün çıxması'=>$gun,'Qürub'=>$qurub];
                    return $weather;
                 }else{
                     return "Axtardiginiz seher tapilmadi";
                 }
                
            }
             
        }
$today = getWeather('baki');        