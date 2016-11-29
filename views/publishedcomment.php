<?php //include'css/login.css';
    //include ("models/db/DataBase.php");
    include ("models/db/Select.php");
    $new1 = new Select("comments");
    $result = $new1->getPublishedData();
    foreach($result as $value){




echo "<div class=\"center\"  style=\"margin: 10px auto;\">";
  echo   "<div class=\"name\">$value[name]</div>";
   echo   "<div class=\"email\">$value[email]</div>";
   echo   "<div class=\"text\">$value[text]</div>";
  echo   "<div class=\"image\"><img src=\"$value[image]\"></div>";
    
echo   "</div>";
}?>