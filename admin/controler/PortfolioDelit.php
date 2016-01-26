<?php
require __DIR__.'/../../autoload.php';

if(!empty($_GET['delid'])){

    $portfolio=new Portfolio();
    $portfolio->deleteById($_GET['delid']);

}
header('location: ../../admin.php');

