<?php
function __autoload($class){
    if(file_exists(__DIR__.'/classes/'.$class. '.php')){
        require __DIR__.'/classes/'.$class. '.php';
    }
};
?>