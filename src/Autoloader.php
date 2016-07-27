<?php

function autoload($className) {
    $parts = explode('\\', $className);
    $dir = './';

    unset($parts[0]);

    foreach($parts as $part) {
        if(is_file($dir .end($parts) . '.php')) {
            require_once $dir . end($parts) . '.php';
            break;
        } else {
            $dir .= $part . '/';
        }
    }
}

spl_autoload_register('autoload');


$MainClass = new MainClass\MainClass();
$MainClass->test();