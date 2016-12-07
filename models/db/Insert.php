<?php
//include ("models/db/DataBase.php");
class Insert extends DataBase{
     private $tabname;
     private $data;
     
    
    function __construct($tablename, $data){
        $this->connectToDb();
        $this->tabname = $tablename;
        $this->data = $data;
    }
    
    function insertData(){
        $query = "INSERT INTO $this->tabname ";
        foreach ($this->data as $key => $value) {
            $keys[] = $key;
            $values[] = $value;
        }
        $query .= "(`".implode($keys, "`,`"). "`) VALUES ";
        $query .= "('".implode($values, "','"). "')";
        mysql_query($query);
    }
    
}
?>