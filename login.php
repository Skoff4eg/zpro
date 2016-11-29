
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
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome</h2>
        </div>
    </div>

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login.
            </div>
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="mlogin">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="mpassword">
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary" name="msubmit">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>

</div>

<!-- javascript -->
<?php
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

</body>
</html>
