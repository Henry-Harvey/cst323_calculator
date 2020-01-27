<?php
spl_autoload_register(function($class){
    
    // get the difference in folders between the location of autoloader and the file that called autoloader
    $lastdirectories = substr(getcwd(), strlen(__DIR__));
    
    echo "getcwd = : " . getcwd() . "<br>";
    echo "__DIR__ = : . " . __DIR__ . "<br>";
    echo "last directories = : " . $lastdirectories . "<br>";
    
    // count the number of slahes (folder depth)
    $numberOfLastDirectories = substr_count($lastdirectories, '\\');
    
    // this is the list of possible locations that classes are found in this app
    $directories = ['business', 'business/model', 'database', 'presentation', 'presentation/handlers', 'presentation/views'];
    
    // look inside each directory for the desired class
    foreach($directories as $d){
        $currentDirectory = $d;
        for($x = 0; $x < $numberOfLastDirectories; $x++){
            $currentDirectory = "../" . $currentDirectory;
        }
        $classFile = $currentDirectory . '/' . $class . '.php';
        
        echo "this is my class file: " . $classFile;
        
        if(is_readable($classFile)){
            if(require $d . '/' . $class . ".php"){
                break;
            }
        }
        else{
            //echo $classFile . " was NOT readable <br>";
        }
    }
    
});
