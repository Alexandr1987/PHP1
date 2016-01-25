<?php

require_once __DIR__.'/../autoload.php';
class About

{
    const TABLE = 'PHP1HW';

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
        $sql = "UPDATE PHP1HW SET text='$text' WHERE id='$id'";
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }

    public function updateText($text,$id){
        $this->id = $id;
        $this->text = $text;
        $dbh = new Connection();
        $sql = "UPDATE PHP1HW SET text='$text' WHERE id='$id'";
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }

    public function insert($content='',$text=''){
        $this->content = $content;
        $this->text = $text;
        $dbh = new Connection();
        $sql = "INSERT INTO PHP1HW(content, text) VALUES ('" . $content . "','" . $text . "')";
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }

    public function deleteById($id){
        $this->id = $id;
        $dbh = new Connection();
        $sql = 'DELETE FROM ' . self::TABLE .' WHERE id='.$id;
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }


}