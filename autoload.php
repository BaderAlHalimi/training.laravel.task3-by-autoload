<?php
spl_autoload_register(function($classname){
    include $classname . '.php';
});