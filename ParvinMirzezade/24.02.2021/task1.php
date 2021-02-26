
<?php 

if (isset($_POST['submit']))
 {

     echo  $_POST['email'];
     echo  $_POST['text']; 

       $file = fopen("text.txt", "a") or die('file acmaq mumkun olmadi');
       $metn = $_POST['email']. "|" .$_POST['text']. "\n";
       fwrite($file, $metn);
       fclose($file);
 
 }



?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

                  
<section id="contact">
            <div class="section-content">
                <h1 class="section-header"> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"></span></h1>
               
            </div>
            <div class="contact-section">
            <div class="container">
                <center>
                <form method="post">
                    
                        <div class="form-group">
                            <label for="exampleInputEmail">Email Address</label> <br><br>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="emailiniz daxil edin" ><br><br>
                        </div>  
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description"> Message</label><br><br>
                            <textarea  class="form-control" name="text" id="description" placeholder="mesajiniz bizimle bolusun"></textarea> <br><br>
                        </div>
                        <div>

                            <input type="submit" class="submit"  name="submit" value="send" >
                        </div>
                        
                    </div>
                </form>
                </center>
            </div>
        </section>

        
</body>
</html>

<div>
             
   <style >
       /*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 550px;
  background: #3a6186; 
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); 
  background: linear-gradient(to left, #3a6186 , #89253e); 
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}


.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
    width: 350px;
   /* margin-top: px;*/
}

input.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;


}


   </style>





 