<?php
    if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
    include("admin/main.php");
    include ("models/db/Select.php");
    $new2 = new Select("comments");
    $Allresult = $new2->getPublishedData();
    include("views/allcomments.php");
        
}
else{
    include ("views/publishedcomment.php");
    include ("views/comment.php");
    include ("controllers/login.php");
}
?>