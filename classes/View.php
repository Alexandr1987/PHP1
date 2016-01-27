<?php

namespace App;

class View

{

    protected $data = [];
    protected $team = [];

    public function assign($name,$value){
        $this->data[$name] = $value;
        return $this->data;

    }

    public function display($template,$data='',$team=''){


        include __DIR__.'/../templates/'.$template;

    }
}