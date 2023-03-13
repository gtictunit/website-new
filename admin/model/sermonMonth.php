<?php
    class sermonMonth{
        
        
        private $insert;

        public function __construct() {
            require_once  "model/insertClass.php";        
            $this->insert = new insertClass();
        }
        public function newSermonMonth(){
            return $this->insert->insSermonMonth();
        }    
    }
