<?php

class Router {
    
    function __construct() {
        $get_url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_SPECIAL_CHARS);
        // remove trailing slash
        $this -> request = rtrim($get_url, "/");
        // Split URL on final forward slash and make the first letter uppercase
        $this -> params = array_map('ucfirst', explode("/", $this -> request));
        // first parameter set as a name of the controller 
        $this -> controller = ($this -> params[0] == 'index.php') ? 'Index' : $this -> params[0];
        
        // prepare url to call controller
        $file = $this->controller.'Controller';
        $url = 'controllers/'.$file.'.php';
        
        // make call to existing controllers
        if(file_exists($url)) {
            require_once $url;
            $this -> control = new $file($this -> params);
        } else { 
            // here you can create new log modul ([S]OLID)
            echo "Unknown location!"; 
            exit;
        }
    }
    
    public function functionName() {
        return "dddssss";
    }
    
    public function __toString() {
        return $this -> controller;
    }
}