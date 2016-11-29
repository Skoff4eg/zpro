
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
if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
    include("admin/main.php");    
}
else{
    include ("login.php");
}

    /*include ("views/db/DataBase.php");
    include ("views/db/Select.php");
    $new1 = new Select("users");
    $result = $new1->getRecordById(1);
    print_r ($result);*/
    
?>

</body>
</html>
