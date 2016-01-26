<?php
require __DIR__.'/../../autoload.php';

$name = $_POST['name'];
$position = $_POST['position'];
$description = $_POST['description'];
$file = $_FILES['image'];

$uploaddir = __DIR__."/../../img";



/*upload img*/

$name_file = 'image';

if(!empty($file) && !empty($name) && !empty($position) && !empty($description)){
    $uploads = new Uploader($name_file);
    $uploads->upload($uploaddir);
    $team=new Team();
    $team->insert($name,$position,$description,$_FILES['image']['name']);
}





header("Location: ../../admin.php");

