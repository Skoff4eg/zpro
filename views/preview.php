<?php
echo "<div class=\"center\"  style=\"margin: 10px auto;\">";
  echo   "<div class=\"name\">$data_insert[name]</div>";
   echo   "<div class=\"email\">$data_insert[email]</div>";
   echo   "<div class=\"text\">$data_insert[text]</div>";
  echo   "<div class=\"image\"><img src=\"$data_insert[image]\"></div>";
    
echo   "</div>";
?>
<form action="" method="post">
<input type="submit" name="c_ok" value="Send" >
</form>