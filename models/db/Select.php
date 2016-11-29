<?php
class Select extends DataBase{
    private $tabname;
    
    function __construct($tablename){
        $this->connectToDb();
        $this->tabname = $tablename;
    }
    
    function getRecordById($id){
        $query = "SELECT * FROM $this->tabname WHERE id = '$id'";
        if($sqldata = mysql_query($query)){
            $data = mysql_fetch_array($sqldata);
            return $data;
        }
    }
    
    function getAllData(){
        $query = "SELECT * FROM $this->tabname";
    }
    
    function getPublishedData(){
        $query = "SELECT * FROM $this->tabname WHERE `status` = 1";
        if($sqldata = mysql_query($query)){
            for($i = 0;$i < mysql_num_rows($sqldata); $i++)
                $data[$i] = mysql_fetch_array($sqldata);
        }
        return $data;
    }
    
    function getUserData($params){
        $query = "SELECT * FROM $this->tabname WHERE ";
        foreach($params as $key => $value){
            $query .= "$key = '$value' AND ";
        }
        $query = substr($query, 0,-4);
        if($sqldata = mysql_query($query)){
            for($i = 0;$i < mysql_num_rows($sqldata); $i++)
                $data[$i] = mysql_fetch_array($sqldata);
        }
        return $data;
    }
}


?>