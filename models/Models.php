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
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id ASC';
        $dbh = new Connection();
        $sth = $dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, static::class);
    }


    public function deleteById($id){
        $this->id = $id;
        $dbh = new Connection();
        $sql = 'DELETE FROM ' . static::TABLE .' WHERE id='.$id;
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }


}