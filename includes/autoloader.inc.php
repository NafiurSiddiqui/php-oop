<?php

    spl_autoload_register('autoloader'); //Autoloads classes

    function autoloader($className){
        //path
        $path = 'classes/';
        $ext = '.class.php' ;
        $fullpath = $path . $className . $ext;

        //ERROR handler
        if(!file_exists($fullpath)){
            return false;
        }

        include_once $fullpath;

    }




