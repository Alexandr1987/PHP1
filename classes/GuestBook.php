<?php

class GuestBook{

    public $article;
    protected $path;
    protected $data;
    public function __construct($path){
        $this->path = $path;
        $this->data=file($path);
    }



    public function getData(){
        return $this->data;
    }

    public function append($text) {
        $this->data[] = $text;

    }

    public function save(){
        file_put_contents($this->path,$this->data);
    }

}