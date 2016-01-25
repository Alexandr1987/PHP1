<?php
require __DIR__.'/../../autoload.php';

if(!empty($_GET['delid'])){

    $team=new Team();
    $team->deleteById($_GET['delid']);

}
header('location: ../../admin.php');

