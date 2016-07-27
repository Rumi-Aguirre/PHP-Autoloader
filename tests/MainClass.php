<?php

namespace MainClass;

class MainClass {

    public function test(){
        $AutoloadedClass = new SubClasses\AutoloadedClass();
        echo $AutoloadedClass->var;
    }
}
