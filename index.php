
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

<body><?php
    include ("views/db/DataBase.php");
    $new1 = new DataBase;
    $result = $new1->connectToDb();
    print_r ($result);
    
?>
<div class="loginpage">
<a href="login.php">Login page</a>
</div>
</body>
</html>
