<?php
class Delete extends DataBase{

    function __construct($tablename, $data){
        $this->connectToDb();
        $this->tabname = $tablename;
        $this->data = $data;
    }

    function deleteData(){
        $query = "DELETE FROM $this->tabname WHERE ";
        foreach($this->data as $key => $value ){
            $query .= "$key = '$value'";
        }
        //mysql_query($query);
        return $query;
    }
}
?>
