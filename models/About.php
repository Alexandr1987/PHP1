<?php

require_once __DIR__.'/../autoload.php';



class About
    extends Models
{
    const TABLE = 'PHP1HW';

    public $text;
    public $title;
    public $autor;
    public $content;

    public function updateById($text,$content,$id){
        $this->id = $id;
        $this->text = $text;
        $this->content = $content;
        $sql = "UPDATE PHP1HW SET text='$text', content='$content' WHERE id='$id'";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }

    public function insert($content='',$text=''){
        $this->content = $content;
        $this->text = $text;
        $sql = "INSERT INTO PHP1HW(content, text) VALUES ('" . $content . "','" . $text . "')";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

    }



}