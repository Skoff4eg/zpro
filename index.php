
    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Login page</title>

    <!-- The styles -->
    <link href="css/login.css" rel="stylesheet">
    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<?php
session_start();

/*if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
    include("admin/main.php");
    //require("admin/main.php");    
}
else{
    include ("views/publishedcomment.php");
    include ("views/comment.php");
    include ("login.php");
    
    //include ("views/comment.php");
}*/
include ("controllers/Comments.php");
    
    
?>

</body>
</html>
