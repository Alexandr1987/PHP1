<?php
require __DIR__.'/../../autoload.php';



if(!empty($_GET['delid'])){

    $about=new About();
    $about->deleteById($_GET['delid']);

}
header('location: ../../admin.php');


