<?php

require_once __DIR__.'/../autoload.php';

$comentDelete = $_POST['comentdelete'];


if(!empty($comentDelete)){
    $contact = new Contact();
    $contact->deleteById($comentDelete);
}


