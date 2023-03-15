<?php
    class admin{
        
        
        private $insert;

        public function __construct() {
            require_once  "model/insertClass.php";        
            $this->insert = new insertClass();
            require_once  "model/selectClass.php";        
            $this->select = new selectClass();
        }
        public function newAdmin(){
            return $this->insert->insAdministrator();
        }    
        public function viewAllAdministrator(){
            return $this->select->viewAllAdministrator();
        }
    }
