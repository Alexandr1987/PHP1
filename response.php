<?php


require __DIR__.'/autoload.php';
$name=$_POST['name'];
$title=$_POST['title'];
$article = $_POST['new_article'];



//upload_article($file,$name,$title,$article);
if (!empty($name) && !empty($title) && !empty($article)) {
    if (is_readable(__DIR__ . '/library.txt') == true) {
        $app = New GuestBook();
        $app->append($name,$title,$article);
    }
}




header("Location: /index.php");