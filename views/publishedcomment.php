<?php //include'css/login.css';

    foreach($result as $value){




echo "<div class=\"center\"  style=\"margin: 10px auto;\">";
  echo   "<div class=\"name\">Автор: $value[name]</div>";
   echo   "<div class=\"email\">Email: $value[email]</div>";
   echo   "<div class=\"text\">Коментарий:</br>$value[text]</div>";
  echo   "<div class=\"image\"><img src=\"$value[image]\"></div>";
    
echo   "</div>";
}?>