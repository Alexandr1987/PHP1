<?php
require __DIR__.'/../../autoload.php';

$text=$_POST['text'];
$content=$_POST['content'];
if(!empty($text) || !empty($content)){
    $about=new About();
    $about->insert($text,$content);
    header('location: ../../admin.php');
}

/*else
    if(!empty($text) || !empty($content)){
    $about=new About();
    $about->insert($text,$content);
    header('location: ../../admin.php');
}*/

