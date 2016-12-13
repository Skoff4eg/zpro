<?php //include'css/login.css';

    foreach($result as $value){




echo "<div class=\"box-inner\"  style=\"margin: 10px auto;\">";
  echo   "<div class=\"name box-header list-group-item\">Автор: $value[name]
  <div class=\"pull-right\">$value[created]</div></div>";
   echo   "<div class=\"email list-group-item\">Email: $value[email]</div>";
   echo   "<div class=\"text list-group-item\">Коментарий:</br>$value[text]</div>";
  echo   "<div class=\"center image list-group-item\"><img src=\"$value[image]\"></div>";
    
echo   "</div>";
}?>