<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

class database
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    
    public $conn;

    public function __construct() {
        $this->host = 'localhost';
        $this->dbname = 'weatherproject';
        $this->username = 'root';
        $this->password = '';
    }

    public function Connect(){
    
        $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);

        if(mysqli_connect_error()){
            echo "error connecting to database";
        } else {
            return $this->conn;
        }
         
    }
}

?>
