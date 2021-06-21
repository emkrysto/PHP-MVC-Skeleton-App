<?php

class ViewController {
    
    function __construct() {}
    
    public function render() {
        require_once 'views/header.php';
        $file = 'views/'. $this -> controller . '/' . $this -> template . '.php';
        
        if(file_exists($file)) { 
            require_once 'views/'. $this -> controller . '/' . $this -> template . '.php';
        } else {
            echo "Unknown location! <br />"; 
        }
    }
}

