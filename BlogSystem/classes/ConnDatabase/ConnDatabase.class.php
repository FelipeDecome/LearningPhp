<?php 

class ConnDatabase {

    private $host;
    private $database;
    privare $user;
    private $pass;
    private $charset;

    public function __construct($host, $database, $user, $pass, $charset = "utf-8") 
    {
        $this->host = $host;
        $this->database = $database;
        $this->user = $user;
        $this->pass = $pass;
        $this->charset = $charset;
    }

    public function conn(){
        
    }
	
}