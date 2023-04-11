<?php 

class Database{
    public $servername;  
    public $database;
    public $username;
    public $password;

    public function __construct($servername, $database, $username, $password){
        $this->servername=$servername;
        $this->database=$database;
        $this->username=$username;
        $this->password=$password;

        $this->connect();
    }

    public function connect(){
        try{
            $conn=new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            // set the pdo error mode to exeption
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return 'successfully';
        }catch (PDOException $e){
            echo "connection failed: ". $e->getMessage();
        }
    }
}
