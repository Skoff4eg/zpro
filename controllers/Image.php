<?php

$path = 'public/';
$tmp_path = 'tmp/';

$types = array('image/gif', 'image/png', 'image/jpeg');

$size = 1024000;


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{print_r ($_FILES);echo '|||';print_r ($_POST);
    if (!in_array($_FILES['c_img']['type'], $types)){
	    die('<p>Запрещённый тип файла.</p>');
    }

    function resize($file)
    {
	global $tmp_path;

	// Ограничение по ширине в пикселях
	$max_thumb_size = 320;


	// Cоздаём исходное изображение на основе исходного файла
	if ($file['type'] == 'image/jpeg')
	    $source = imagecreatefromjpeg($file['tmp_name']);
	elseif ($file['type'] == 'image/png')
	    $source = imagecreatefrompng($file['tmp_name']);
	elseif ($file['type'] == 'image/gif')
	    $source = imagecreatefromgif($file['tmp_name']);
	else
	    return false;
	$src = $source;
	// Определяем ширину и высоту изображения
	$w_src = imagesx($src); 
	$h_src = imagesy($src);
   // if($quality == NULL){ 
        $quality = 75;
    //}

    $w = $max_thumb_size;


	// Если ширина больше заданной
	if ($w_src > $w)
	{
	    // Вычисление пропорций
	    $ratio = $w_src/$w;
	    $w_dest = round($w_src/$ratio);
	    $h_dest = round($h_src/$ratio);

	    // Создаём пустую картинку
	    $dest = imagecreatetruecolor($w_dest, $h_dest);
	    
	    // Копируем старое изображение в новое с изменением параметров
	    imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);

	    // Вывод картинки и очистка памяти
	    imagejpeg($dest, $tmp_path . $file['name'], $quality);
	    imagedestroy($dest);
	    imagedestroy($src);

	    return $file['name'];
	}
	else
	{
	    // Вывод картинки и очистка памяти
	    imagejpeg($src, $tmp_path . $file['name'], $quality);
	    imagedestroy($src);

	    return $file['name'];
	}
    }

    $name = resize($_FILES['c_img']);

    // Загрузка файла и вывод сообщения
    if (!@copy($tmp_path . $name, $path . $name))
	echo '<p>Что-то пошло не так.</p>';
    else
	echo '<p>Загрузка прошла удачно <a href="' . $path . $_FILES['c_img']['name'] . '">Посмотреть</a>.</p>';
$_POST['c_img'] = $path . $_FILES['c_img']['name'];
    // Удаляем временный файл
    unlink($tmp_path . $name);
}

?>