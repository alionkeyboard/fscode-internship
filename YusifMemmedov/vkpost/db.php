<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class VKUsersDB{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'vk_users';
    private $table = 'users';
    
    private $connection;
    
    public function __construct(){
        try{
            
            $this->connection = new PDO("mysql:host=$this->host", $this->user, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "CREATE DATABASE IF NOT EXISTS $this->dbname";
            $this->connection->exec($sql);
            
            $sql = "CREATE TABLE IF NOT EXISTS $this->dbname.$this->table (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, vk_id TEXT UNIQUE, token TEXT, name TEXT)";
            
            $this->connection->exec($sql);
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }
    
    
    function upsert_user($vk_id ,$token, $name){
        
        if( count($this->get_token($vk_id)) === 1 )
        {
            $sql = "UPDATE $this->dbname.$this->table SET token = '$token' WHERE vk_id = '$vk_id'";
        }
        else
        {
            $sql = "INSERT $this->dbname.$this->table (vk_id , token, name) VALUES('$vk_id' , '$token' , '$name')";
        }
        
        $this->connection->exec($sql);
    }
    
    function fetch_users(){
        $sql = "SELECT vk_id , token , name FROM $this->dbname.$this->table";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result  = $stmt->fetchAll();
        return $result;
    }
    
    //bu verilmish vk userin daha evvel qeyd olunmasini yoxlamaq ucundur
    function get_token($vk_id){
        $sql = "SELECT token FROM $this->dbname.$this->table WHERE vk_id = '$vk_id'";
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