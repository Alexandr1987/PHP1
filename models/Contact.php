<?php

require_once __DIR__.'/../autoload.php';
class Contact
    extends About
{
    const TABLE = 'contact';

    public $text;
    public $title;
    public $autor;

    public static function findAll(){
        $dbh = new Connection();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC';
        $sth = $dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, self::class);
    }



    public function updateById($text,$id){
        $this->id = $id;
        $dbh = new Connection();
        $sql = "UPDATE contact SET text='$text' WHERE id='$id'";
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }

    public function updateText($text,$id){
        $this->id = $id;
        $this->text = $text;
        $dbh = new Connection();
        $sql = "UPDATE contact SET text='$text' WHERE id='$id'";
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }

    public function insert($title,$text,$avtor){
        $this->title = $title;
        $this->text = $text;
        $this->avtor = $avtor;
        $dbh = new Connection();
        $sql = "INSERT INTO contact(title, text, autor) VALUES ('" . $title . "','" . $text . "','" . $avtor . "')";
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }




}