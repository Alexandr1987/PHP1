<?php
require __DIR__.'/../../autoload.php';

$text=$_POST['text'];
$content=$_POST['content'];
$id = $_POST['id'];
if(!empty($text) || !empty($content)){
    $about=new About();
    $about->updateById($text,$content,$id);
    header('location: ../../admin.php');
}

/*else
    if(!empty($text) || !empty($content)){
    $about=new About();
    $about->insert($text,$content);
    header('location: ../../admin.php');
}*/

