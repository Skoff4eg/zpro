
    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Login page</title>

    <!-- The styles -->
    <link href="css/login.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <script src="js/preview.js"></script>

</head>

<body>
<div class="container">
<div class="row">
<div class="col-lg-1 col-md-1"></div>
<div class="col-lg-10 col-md-10">
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
</div>
<div class="col-lg-1 col-md-1"></div>
</div>
</div>
</body>
</html>
