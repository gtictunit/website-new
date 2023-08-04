<?php
    class streamingLink{
        
        
        private $insert;

        public function __construct() {
            require_once  "model/insertClass.php";        
            $this->insert = new insertClass();
            require_once  "model/selectClass.php";        
            $this->select = new selectClass();
        }
        public function newStreamingLink(){
            return $this->insert->insStreamingLink();
        }    
        public function viewAllStreamingLink(){
            return $this->select->viewAllStreamingLink();
        }
    }
