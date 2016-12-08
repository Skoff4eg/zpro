<?php
echo "<div class=\"center\"  style=\"margin: 10px auto;\">";
  echo   "<div class=\"name\">$result_del[name]</div>";
   echo   "<div class=\"email\">$result_del[email]</div>";
   echo   "<div class=\"text\">$result_del[text]</div>";
  echo   "<div class=\"image\"><img src=\"$result_del[image]\"></div>";
    
echo   "</div>";
?>
<form action="" method="post">
<input type="submit" name="del_ok" value="Да" ><br>
<input type="submit" name="del_no" value="Нет" ><br>
</form>