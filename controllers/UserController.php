<?php

class UserController {
    
    function UserController($params) {
        
        $action = (isset($params[1])) ? $params[1] : "login";
        
        if(method_exists($this, $action)) { 
            $this -> $action(); 
        } else {
            echo "Unknown location! <br />"; 
        }
        
    }
    
    private function login() {

        echo "login";    
    }
}   