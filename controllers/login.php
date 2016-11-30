<!-- javascript -->
<?php
include ("views/login.php");
if(isset($_POST['msubmit'])){
   /* echo "<prie>";
    print_r($_POST);
    echo "<prie>";*/
    //include ("models/db/DataBase.php");
    //include ("models/db/Select.php");
    $params = array();
    $params['login'] = $_POST['mlogin'];
    $params['password'] = $_POST['mpassword'];
    $new1 = new Select("users");
    $result = $new1->getUserData($params);
    if(count($result)>0){
        $_SESSION['user'] = $result[0]['login'];
        
    }
    //print_r ($_SESSION);
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL='>";
}
?>