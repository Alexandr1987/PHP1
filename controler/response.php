<?php

require_once __DIR__.'/../autoload.php';

$name=$_POST['name'];
$mail=$_POST['mail'];
$text=$_POST['text'];
$data = date("Y-m-d H:i:s");

if(!empty($name) && !empty($text) && !empty($mail)){
    $contact = new Contact();
    $contact->insert($data,$name,$text,$mail);
}


$response = ['name' => $name, 'mail' => $mail,'text'=> $text, 'data'=> $data];
echo json_encode($response);