
<?php //for( $i=0; $i< count($Allresult2); $i++){
    if($Allresult2['status'] == 1){
        $cheked = 'checked';
    } else{ $cheked = ''; }
echo "<h2>Изменить коментерий</h2>
            <form  action='' method='POST'>
            <input type='hidden' name='edit_id' value='{$Allresult2['id']}' />
            <p>Name:<br> 
            <input type='text' name='edit_name' value='{$Allresult2['name']}' />
            <p>Email:<br> 
            <input type='text' name='edit_email' value='{$Allresult2['email']}' /></p>
            <p>Text: <br> 
            <input type='text' name='edit_text' value='{$Allresult2['text']}' /></p>
            <p>Опубликовано: <br> 
            <input type='checkbox' name='edit_status' value='{$Allresult2['status']}' {$cheked}/></p>
            <input type='submit' name='update_s' value='Сохранить'>
            </form>";
       //     }
?>