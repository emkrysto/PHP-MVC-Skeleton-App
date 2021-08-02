<?php

class UserController extends ViewController {
    
    function __construct($params) {
        
        /*
         *  If the child does not define a constructor then it may be inherited
         *  from the parent class just like a normal class method
         */
        parent::__construct();
        
        require_once 'models/UserModel.php';
        $this -> model = new UserModel();

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
        $this -> view -> user = 'Username';
        $this -> view -> pass = 'Password';

        $this -> view -> render();
    }
    
    private function info() {
        
        $result = $this -> model -> info();
        
        $this -> view -> title = 'User info: ';
        $this -> view -> username = $result['username'];
        $this -> view -> roles = json_decode($result['roles'])[0];
 
        //echo $this -> model; // to show sql query

        $this -> view -> render();
    }
}   
