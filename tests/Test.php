<?php

//Loading the Autoloader
require "Autoloader.php";

//Instanciating a Class
$MainClass = new MainClass\MainClass();
//Calling a method of the instanciated Class that calls another class under another directory
$MainClass->test();