<?php
    class sermonMonth{
        
        
        private $insert;

        public function __construct() {
            require_once  "model/insertClass.php";        
            $this->insert = new insertClass();
            require_once  "model/selectClass.php";        
            $this->select = new selectClass();
        }
        public function newSermonMonth(){
            return $this->insert->insSermonMonth();
        } 
        public function viewAllSermonMonth(){
            return $this->select->viewAllSermonMonth();
        }
    }
