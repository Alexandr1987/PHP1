<?php
require __DIR__.'/../../autoload.php';

$title = $_POST['name'];
$img = $_FILES['image'];
$description = $_POST['description'];
$id = $_POST['id'];

$uploaddir = __DIR__."/../../img";



/*upload img*/

$name_file = 'image';

$img ='/../../img/'.$_FILES['image']['name'];

if(!empty($img) && !empty($title) && !empty($description)){
    $uploads = new Uploader($name_file);
    $uploads->upload($uploaddir);
    $portfolio=new Portfolio();
    $portfolio->updateById($title,$img,$description,$id);
}





header("Location: ../../admin.php");

