<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 11.01.2016
 * Time: 14:28
 */
require __DIR__.'/autoload.php';

/*upload img*/
$uploaddir = __DIR__."/img";
$name_file = 'image';

if(!empty($_FILES['image']['name'])){
    $uploads = new Uploader($name_file);
    $uploads->upload($uploaddir);
}





header("Location: /index.php");