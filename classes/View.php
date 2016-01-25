<?php


class View

{

    protected $data = [];
    protected $team = [];
    protected $allportfolio = [];
    public function assign($name,$value){
        $this->data[$name] = $value;
        return $this->data;

    }

    public function display($template,$data='',$team='',$allportfolio=''){


        include __DIR__.'/../templates/'.$template;

    }
}