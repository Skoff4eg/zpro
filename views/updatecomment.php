<?php
$id = 1;
$name = 'first';
$company = 'one';
$check = 0;
echo "<h2>Изменить модель</h2>
            <form method='POST'>
            <input type='hidden' name='id' value='$id' />
            <p>Введите модель:<br> 
            <input type='text' name='name' value='$name' /></p>
            <p>Производитель: <br> 
            <input type='text' name='company' value='$company' /></p>
            <p>Опубликовано: <br> 
            <input type='checkbox' name='company' value='$check' /></p>
            <input type='submit' value='Сохранить'>
            </form>";
?>