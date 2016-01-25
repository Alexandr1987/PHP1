<?php

require_once __DIR__.'/../autoload.php';
class Team
    extends About
{
    const TABLE = 'team';

    public $text;
    public $title;
    public $autor;

    public static function findAll(){
        $dbh = new Connection();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id ASC';
        $sth = $dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, self::class);
    }



    public function updateById($text,$id){
        $this->id = $id;
        $dbh = new Connection();
        $sql = "UPDATE news SET text='$text' WHERE id='$id'";
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

    public function insert($name,$position,$description){
        $this->name = $name;
        $this->position = $position;
        $this->description = $description;
        $dbh = new Connection();
        $sql = "INSERT INTO team (name, position, about) VALUES ('" . $name . "','" . $position . "','" . $description . "')";
        $sth = $dbh->prepare($sql);
        $sth->execute();

    }




}