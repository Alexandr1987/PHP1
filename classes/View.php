<?php


class View

{

    protected $data = [];

    public function assign($name,$value){
        $this->data[$name] = $value;
        return $this->data;

    }

    public function display($template, array $data){

        $this->data=$data;
        include __DIR__.'/../templates/'.$template;

    }
}