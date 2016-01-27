<?php

require_once __DIR__.'/../autoload.php';
class Contact
    extends Models
{
    const TABLE = 'contact';
    public $text;
    public $title;
    public $autor;

    public function updateById($text,$id){
        $this->id = $id;
        $sql = "UPDATE contact SET text='$text' WHERE id='$id'";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }


    public function insert($data,$name,$text,$mail){
        $this->data = $data;
        $this->text = $text;
        $this->name = $name;
        $this->mail = $mail;
        $sql = "INSERT INTO contact(data, name, text, mail) VALUES ('" . $data . "','" . $name . "','" . $text . "','".$mail."')";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }


}