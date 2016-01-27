<?php
function __autoload($class){

    if(file_exists(__DIR__.'/admin/classes/'.$class. '.php')){
        require __DIR__.'/admin/classes/'.$class. '.php';
    }else if(file_exists(__DIR__.'/models/'.$class. '.php')){
        require __DIR__.'/models/'.$class. '.php';
    }else if(file_exists(__DIR__.'/classes/'.$class. '.php')){
        require __DIR__.'/classes/'.$class. '.php';
}else { $classNameParts = explode('\\', $class);
        unset($classNameParts[0]);
        $class = implode('/',$classNameParts);
        require __DIR__.'/classes/'.$class. '.php';
    }};
?>