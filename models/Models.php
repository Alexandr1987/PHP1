<?php

require_once __DIR__.'/../autoload.php';
abstract class Models

{
    const TABLE = 'PHP1HW';
    public $dbh;
    public $text;
    public $title;
    public $autor;
    public $content;

    public function __construct(){
        $this->dbh= new Connection();
    }

    public static function findAll(){
        $dbh = new Connection();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id ASC';
        $sth = $dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, static::class);
    }


    public function updateById($text,$content,$id){
        $this->id = $id;
        $this->text = $text;
        $this->content = $content;
        $dbh = new Connection();
        $sql = "UPDATE PHP1HW SET text='$text', content='$content' WHERE id='$id'";
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
        $sql = 'DELETE FROM ' . static::TABLE .' WHERE id='.$id;
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }


}