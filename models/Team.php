<?php

require_once __DIR__.'/../autoload.php';
class Team
    extends Models
{
    const TABLE = 'team';

    public $text;
    public $title;
    public $autor;
    public $foto;


    public function updateById($text,$id){
        $this->id = $id;
        $sql = "UPDATE news SET text='$text' WHERE id='$id'";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }

    public function insert($name,$position,$description,$foto){
        $this->name = $name;
        $this->position = $position;
        $this->description = $description;
        $this->foto = $foto;
        $sql = "INSERT INTO team (name, position, about, foto) VALUES ('" . $name . "','" . $position . "','" . $description . "','" . $foto . "')";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }




}