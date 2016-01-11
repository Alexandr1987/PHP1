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
        fwrite($this->open, "\n");
        fwrite($this->open, $this->name=$name);
        fwrite($this->open, "\n");
        fwrite($this->open, $this->title=$title);
        fwrite($this->open, "\n");
        fwrite($this->open, $this->article=$article);
    }

    public function getData(){
        $this->file = file(__DIR__ . '/../library.txt');
        return $this->file;
    }


}