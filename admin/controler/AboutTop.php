<?php
require __DIR__.'/../../autoload.php';



if(!empty($_GET['delid'])){

    $about=new About();
    $about->deleteById($_GET['delid']);

}
header('location: ../../admin.php');
/*else
    if(!empty($text) || !empty($content)){
    $about=new About();
    $about->insert($text,$content);
    header('location: ../../admin.php');
}*/

