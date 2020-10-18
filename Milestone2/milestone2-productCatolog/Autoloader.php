<?php

spl_autoload_register(function($class){
    
    $lastdirectories = substr(getcwd(), strlen(__DIR__));
    
//     echo "getcwd = : " . getcwd() . "<br>";
//     echo "__DIR__ = : " .  __DIR__ . "<br>";
//     echo "last directories = : " .$lastdirectories . "<br>";
    
    $numberoflastdirectories = substr_count($lastdirectories, '/');
    
    $directories = ['buisnessService', 'businessService/model', 'database', 'presentation', 'presentation/handlers', 'presentation/views', 'utility'];
    
    foreach($directories as $d){
        $currentdirectory = $d;
        for($x = 0; $x < $numberoflastdirectories; $x++){
            $currentdirectory = "../" . $currentdirectory;
        }
        $classfile = $currentdirectory . '/' . $class . '.php';
        
        if(is_readable($classfile)){
            if(require $d . '/' . $class . ".php"){
                break;
            }
        }
    }
    
});