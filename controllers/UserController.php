<?php

class UserController extends ViewController {
    
    function UserController($params) {
        
        /*
         *  If the child does not define a constructor then it may be inherited
         *  from the parent class just like a normal class method
         */
        parent::__construct();
        
        $action = (isset($params[1])) ? $params[1] : "login";
        
        $this -> view = new ViewController();
        $this -> view -> controller = "user";
        $this -> view -> template = $action;
        
        if(method_exists($this, $action)) { 
            $this -> $action(); 
        } else {
            echo "Unknown location! <br />"; 
        }
        
    }
    
    private function login() {

        $this -> view -> title = 'Login: '; 
        $this -> view -> render();
    }
}   