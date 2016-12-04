<?php
//include ("models/db/DataBase.php");
class Update extends DataBase{
     private $tabname;
     private $data;
     
    
    function __construct($tablename, $data){
        $this->connectToDb();
        $this->tabname = $tablename;
        $this->data = $data;
    }
    
    function updateData(){
        $query = "UPDATE $this->tabname SET ";
        foreach ($this->data as $key => $value) {
            if($key != 'id'){
                $query .= "$key='$value',";
            } else {
                $query1 = " WHERE id ='$value'";
            }
            
        }
        $query = substr($query, 0,-1);
        $query .= $query1;
        //return $query;
        mysql_query($query);

    }

}
//UPDATE table_name
//SET column1=value1,column2=value2,...
//WHERE some_column=some_value;
?>