<?php
require __DIR__.'/../../autoload.php';

$name = $_POST['name'];
$position = $_POST['position'];
$description = $_POST['description'];
$file = $_POST['image'];

$uploaddir = __DIR__."/../../img";



/*upload img*/

$name_file = 'image';

if(!empty($_FILES['image']['name'])){
    $uploads = new Uploader($name_file);
    $uploads->upload($uploaddir);
}





header("Location: ../../admin.php");

