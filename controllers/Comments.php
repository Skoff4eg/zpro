<?php
    if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
    include("admin/main.php");
    include ("models/db/DataBase.php");
    include ("models/db/Select.php");
    $new2 = new Select("comments");
    $Allresult = $new2->getAllData();
    include("views/allcomments.php");
    if ($_GET['action'] == 'edit'){
        $new3 = new Select("comments");
        $Allresult2 = $new2->getRecordById($_GET['id']);
       // print_r ($Allresult2);
        include ("views/updatecomment.php"); 
    }
    if($_POST['update_s']){
        $data_update = array();
        $data_update['id'] = $_POST['edit_id'];
        $data_update['name'] = $_POST['edit_name'];
        $data_update['email'] = $_POST['edit_email'];
        $data_update['text'] = $_POST['edit_text'];
        print_r($_POST['edit_status']);
        if(isset($_POST['edit_status'])){$data_update['status'] = 1;} else {$data_update['status'] = 0;}
        
        //print_r($data_update);
        include ("models/db/Update.php");
        $Chenget = new Update("comments", $data_update);
        $Upresult = $Chenget->updateData();
        //print_r ($_POST);
       // echo "<META HTTP-EQUIV='REFRESH' CONTENT='0';URL='index.php'>";
    }
     // print_r ($_POST);  
}
else{
    include ("views/publishedcomment.php");
    include ("views/comment.php");
    include ("controllers/login.php");
}

?>