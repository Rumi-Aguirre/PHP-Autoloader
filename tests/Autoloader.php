<?php

function autoload($className) {
    $parts = explode('\\', $className);
    $dir = __DIR__."/";

    unset($parts[0]);

    foreach($parts as $part) {
        $filename = $dir .end($parts) . '.php';

        if(is_file($filename)) {
            require_once ("$filename");
            break;
        } else {
            $dir .= $part . '/';
        }
    }
}

spl_autoload_register('autoload');