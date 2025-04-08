<?php
spl_autoload_register(function ($class) {

    $classPath = str_replace('\\', '/', $class);
    

    if (strpos($classPath, 'Core/') === 0) {
        $file = dirname(__DIR__) . '/' . $classPath . '.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    } 

    elseif (strpos($classPath, 'Model/') === 0) {
        $file = dirname(__DIR__) . '/src/' . $classPath . '.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }

    elseif (strpos($classPath, 'Controller/') === 0) {
        $file = dirname(__DIR__) . '/src/' . $classPath . '.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }

    return false;
});