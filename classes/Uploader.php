<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 10.01.2016
 * Time: 16:53
 */



class Uploader{
    public $name_file;
    public $newName;
    public $res;
    public $files;
    public $uploaddir;
    public $img_name;
    public $array;
    public $types;

    public function __construct($name_file){
        $this->name_file = $name_file;
    }

    public function isUploaded(){
        if (is_uploaded_file($_FILES[$this->name_file]['tmp_name'])==true){
            return true;
        }else {
            return false;
        }
    }

    public function upload($uploaddir){
        $this->uploaddir = $uploaddir;
        $this->newName = $uploaddir .'/'.basename($_FILES[$this->name_file]['tmp_name']);
        $this->img_name = basename($_FILES[$this->name_file]['tmp_name']);
        $this->array = scandir($uploaddir);
        $this->types = ['image/jpeg', 'image/png'];
        if (in_array($this->img_name, $this->array) != true) {
            if (in_array($_FILES[$this->name_file]['type'], $this->types)) {
                if ($this->isUploaded() == true) {
                    $this->res = move_uploaded_file($_FILES[$this->name_file]['tmp_name'], $this->newName);
                    $this->files = basename($_FILES[$this->name_file]['name']);
                    return $this->files;
                } else {
                    return false;
                }
            } else {
                die('Запрещённый тип файла. <a href="/index.php">Попробовать другой файл?</a>');
            }
        } else{
            return false;
        }
}}