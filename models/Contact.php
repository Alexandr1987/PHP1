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


    public function insert($title,$text,$avtor){
        $this->title = $title;
        $this->text = $text;
        $this->avtor = $avtor;
        $sql = "INSERT INTO contact(title, text, autor) VALUES ('" . $title . "','" . $text . "','" . $avtor . "')";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }


}