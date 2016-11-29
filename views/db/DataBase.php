<?php
class DataBase{
    private $host = 'localhost';
    private $user = 'zpro';
    private $pass = 'zpro';
    private $db = 'zrpo'; 
    
    function connectToDb(){
       // echo ('14');
        if (mysql_connect($this->host, $this->user, $this->pass)){
            //echo ('15');
            if(mysql_select_db($this->db)){
               echo ("dbconnect");
            }
        }
    }
    
    function DbCheckUser(){
            
    }
    
    function closeConnection(){
        $mysql_close();
        echo ("close");
    }
    
}

?>