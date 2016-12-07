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
        
        include ("models/db/Update.php");
        $Chenget = new Update("comments", $data_update);
        $Upresult = $Chenget->updateData();
        //header ("Location:".$_SERVER['DOCUMENT_ROOT'].'index.php');

    }
     
}
else{
    include ("views/publishedcomment.php");
    include ("views/comment.php");
    include ("controllers/login.php");
    include ("controllers/Image.php");
    echo $_SERVER['DOCUMENT_ROOT'];
    if($_POST['c_ok']){
        $data_insert = array();
        $data_insert['id'] = '';
        $data_insert['name'] = $_POST['c_username'];
        $data_insert['email'] = $_POST['c_useremail'];
        $data_insert['image'] = $_POST['c_img'];
        $data_insert['text'] = $_POST['c_msg'];
        //unset($_POST);
        //include ("models/db/DataBase.php");
        include ("models/db/Insert.php");
        $ins_d = new Insert("comments", $data_insert);
        $Upresult2 = $ins_d->insertData();
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=/views/thanks.php'>";
        //header ("Location:".$_SERVER['DOCUMENT_ROOT']./*'/index.php');*/'/views/thanks.php');
        print_r($_POST);
        
    }
    /*Array ( [c_img] => Array ( [name] => screenshot_2.jpg [type] => image/jpeg [tmp_name] => /tmp/phpdoH43X 
    [error] => 0 [size] => 493175 ) ) |||
    Array ( [c_username] => 12345 [c_useremail] => 123456 [c_msg] => comment [c_ok] => Send )*/
    //print_r($_POST);
}

?>