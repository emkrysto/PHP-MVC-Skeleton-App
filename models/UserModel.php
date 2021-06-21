<?php

class UserModel extends PDOModel {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function info() {
        
        $result = $this -> select("*", "admin", "id = 1");
        return $result;
    }
}