<?php
class userLogin{
    
    
    private $Select;

    public function __construct() {
        require_once  "model/selectClass.php";        
        $this->Select = new selectClass();
    }
    public function login(){
        return $this->Select->login();
    }    
}

