<?php

$file = file(__DIR__.'/library.txt');
/*Загружаем статью*/
function upload_article($file,$name,$title,$article)
{
    if (!empty($name) && !empty($title) && !empty($article)) {
        if (is_readable(__DIR__ . '/library.txt') == true) {
            $file = fopen(__DIR__ . '/library.txt', 'a');
            fwrite($file, "\n");
            fwrite($file, $name);
            fwrite($file, "\n");
            fwrite($file, $title);
            fwrite($file, "\n");
            fwrite($file, $article);
            fclose($file);
        } else {
            return false;
        }

    }else{
        return false;
    }
    return true;
}

/*Загружаем картинку*/
/*
function upload_file_cabinet($uploaddir)
{
    $newName = $uploaddir .'/'.basename($_FILES['image']['name']);
    $img_name = basename($_FILES['image']['name']);
    $array = scandir($uploaddir);
    $types = ['image/jpeg', 'image/png'];
    if (in_array($img_name, $array) != true) {
        if (in_array($_FILES['image']['type'], $types)) {
            if (is_uploaded_file($_FILES['image']['tmp_name']) == true) {
                $res = move_uploaded_file($_FILES['image']['tmp_name'], $newName);
                $files = basename($_FILES['image']['name']);
                return $files;
            } else {
                return false;
            }
        } else {
            die('Запрещённый тип файла. <a href="index.php">Попробовать другой файл?</a>');
        }
    } else{
        return false;
    }



};
*/