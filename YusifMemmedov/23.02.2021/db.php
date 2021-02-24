<?php 

class ImageDB{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'imagedb';
    private $table = 'images';
    
    private $connection;
    
    public function __construct(){
        try{
            
            $this->connection = new PDO("mysql:host=$this->host", $this->user, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "CREATE DATABASE IF NOT EXISTS $this->dbname";
            $this->connection->exec($sql);
            
            $sql = "CREATE TABLE IF NOT EXISTS $this->dbname.$this->table (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, image_url TEXT NOT NULL, upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            
            $this->connection->exec($sql);
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }
    
    private function create_stmt(){
        
    }
    
    function insert_image($image_url){
        $sql = "INSERT $this->dbname.$this->table (image_url) VALUES('$image_url')";
        $this->connection->exec($sql);
    }
    
    function fetch_images(){
        $sql = "SELECT * FROM $this->dbname.$this->table";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result  = $stmt->fetchAll();
        return $result;
    }
    
    public function __destruct(){
        $this->connection = null;
    }
}
?>