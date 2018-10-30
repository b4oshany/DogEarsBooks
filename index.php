<?php
    require_once('Routes.php');
    
    //Auto Load classes within specified folders
    function __autoload($class_name) {
        if(file_exists('./classes/'.$class_name.'.php')) {
            require_once './classes/'.$class_name.'.php';
        } else if(file_exists('./Controllers/'.$class_name.'.php')){
            require_once './Controllers/'.$class_name.'.php';
        }
    }
?>