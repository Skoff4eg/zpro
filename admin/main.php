<?php
    echo('you have access');
    include ("views/menu.php");
    
?>


<form class="form-horizontal" action="" method="post">
    <p class="center col-md-5">
        <button type="submit" class="btn btn-primary" name="mlogout">Logout</button>
    </p>
</form>
<?php
if(isset($_POST['mlogout'])){
    print_r($_POST);
    session_destroy();
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL='>";
    //include ("login.php");
}
?>