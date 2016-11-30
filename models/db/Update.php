<?php
include ("models/db/DataBase.php");
class Update extends DataBase{
     private $tabname;
     private $data;
     
    
    function __construct($tablename, $data){
        $this->connectToDb();
        $this->tabname = $tablename;
        $this->data = $data;
    }
    
    function insertData(){
        $query = "UPDATE $this->tabname SET";
        foreach ($data as $key => $value) {
            $keys[] = $key;
            $values[] = $value;
        }

    }

}

?>