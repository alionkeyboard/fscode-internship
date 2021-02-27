<?php
//Burda P
class Model{
    public $host="mysql:host=localhost;dbname=upload_image";
    public $username="root";
    public $password="";
    public static $conn;
    public function __construct(){
        try{
            self::$conn=new PDO($this->host,$this->username,$this->password);
            
        }
        catch(Exception $err){
            print_r ($err->getMessage());
        }
    }
}


?>