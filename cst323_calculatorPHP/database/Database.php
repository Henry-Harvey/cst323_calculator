<?php

class Database{
    
    private $dbservername = "jsftj8ez0cevjz8v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $dbusername = "sh6vp2eob790vqdw";
    private $dbpassword = "jfgetq3gid5rrvol";
    private $dbname = "h4yl5vcjftz35sc7";
    
    function getConnection(){
        $conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);

        if($conn->connect_error){
            echo "Connection failed " . $conn->connect_error . "<br>";
        }
        else{
            return $conn;
        }
              
    }
        
}
