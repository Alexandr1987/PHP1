<?php

require_once __DIR__.'/../autoload.php';
class Portfolio
    extends Models

{
    const TABLE = 'portfolio';

    public $text;
    public $title;
    public $autor;


    public function updateById($title,$img,$description,$id){
        $this->id = $id;
        $this->title = $title;
        $this->img = $img;
        $this->description = $description;
        $sql = "UPDATE portfolio SET title='$title', img='$img', description='$description' WHERE id='$id'";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }

    public function insert($title,$img,$description){
        $this->title = $title;
        $this->img = $img;
        $this->description = $description;
        $sql = "INSERT INTO portfolio (title, img, description) VALUES ('" . $title . "','" . $img . "','" . $description . "')";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }


}