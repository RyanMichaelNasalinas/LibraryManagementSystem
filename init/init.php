<?php

//Autoload Classes
spl_autoload_register(function($className){
    require_once 'class/' .$className .'.php';
});

session_start();


$validation = new Validation;
$login = new Login;
$database = new Database;

?>