<?php

class GuestBook{
    public $name;
    public $title;
    public $article;
    public $file;
    public $open;
    public function __construct(){
        $this->open = fopen(__DIR__ . '/../library.txt', 'a');
    }
    public function append($name,$title,$article) {
        fwrite($this->file, "\n");
        fwrite($this->file, $this->name=$name);
        fwrite($this->file, "\n");
        fwrite($this->file, $this->title=$title);
        fwrite($this->file, "\n");
        fwrite($this->file, $this->article=$article);
        fclose($this->file);
    }

    public function getData(){
        $this->file = file(__DIR__ . '/../library.txt');
        return $this->file;
    }


}